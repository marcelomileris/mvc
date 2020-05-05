CREATE TABLE estruturas.estruturas
(
  id serial NOT NULL,
  estrutura character varying(20) NOT NULL,
  estrutura_id integer,
  CONSTRAINT estruturas_pkey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE estruturas.estruturas
  OWNER TO postgres;

CREATE OR REPLACE FUNCTION estruturas.getestrutura(integer)
  RETURNS SETOF estruturas.t_estrutura AS
$BODY$
declare
  row estruturas.t_estrutura%rowtype;
  tab RECORD;
  res RECORD;
  c boolean;
  loID integer;
  loTeste integer;
begin
  /* 
  Parâmetro 1 -> ID da Estrutura
  Parâmetro 2 -> 0 para Estrutura acima e 1 para estrutura abaixo
  */

  loID = $1;
  
  /* Estrutura Abaixo */
  /*
  if ($2 = 1) then
    row.id = (select id from estruturas.estruturas where id = loID);
    row.estrutura = (select estrutura from estruturas.estruturas where id = loID);
    row.estrutura_id = (select estrutura_id from estruturas.estruturas where id = loID);
    return next row;
    for tab in (select id, estrutura, estrutura_id from estruturas.estruturas where id = loID order by id) loop
      for res in (select id, estrutura, estrutura_id from estruturas.estruturas where estrutura_id = (loID) order by id) loop
        row.id = res.id;
        row.estrutura = res.estrutura;
        row.estrutura_id = res.estrutura_id;          
        return next row;
        loID = res.id;
      end loop;          
    end loop;    
    return;    	
  end if; 	
  */

  /* Estrutura Acima */
  /*if ($2 = 0) then*/
    for tab in (select id, estrutura, estrutura_id from estruturas.estruturas where id <= $1 order by id ) loop
    
    select id into loTeste from estruturas.estruturas where id = loID;
    
    if (loTeste >= 0) then
      for res in (select id, estrutura, estrutura_id from estruturas.estruturas where id = loID order by id ) loop
        row.id = res.id;
        row.estrutura = res.estrutura;
        row.estrutura_id = res.estrutura_id;          
        return next row;
        loID = res.estrutura_id;
      end loop;  
      
      end if;        
    end loop;    
    return;    	
  /*end if; */
  
end
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100
  ROWS 1000;
ALTER FUNCTION estruturas.getestrutura(integer)
  OWNER TO postgres;
