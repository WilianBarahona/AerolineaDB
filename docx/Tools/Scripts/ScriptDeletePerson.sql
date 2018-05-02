/*SCRIPT PARA ELIMINAR PERSONA*/

/*DELETE PASAJERO*/
DELETE FROM FACTURADETALLE WHERE FACTURA_IDFACTURA IN (SELECT FACTURA_IDFACTURA
                                                        FROM FACTURADETALLE 
                                                        WHERE Pasajero_idPasajero=(SELECT PJ.IDPASAJERO 
                                                                                    FROM PERSONA P
                                                                                    INNER JOIN PASAJERO PJ ON P.IDPERSONA=PJ.PERSONA_IDPERSONA
                                                                                    WHERE P.IDPERSONA=31));

DELETE FROM EQUIPAJE WHERE PASAJERO_IDPASAJERO IN (SELECT PJ.IDPASAJERO 
                                                    FROM PERSONA P
                                                    INNER JOIN PASAJERO PJ ON P.IDPERSONA=PJ.PERSONA_IDPERSONA
                                                    WHERE P.IDPERSONA=31);
                                                    
DELETE FROM PASAJERO WHERE PERSONA_IDPERSONA=31;


/*DELETE EMPLEADO*/
DELETE FROM EMPLEADOXCARGO WHERE EMPLEADO_IDEMPLEADO IN (SELECT E.IDEMPLEADO
                                                        FROM EMPLEADO E
                                                        INNER JOIN PERSONA P ON E.PERSONA_IDPERSONA=P.IDPERSONA
                                                        WHERE E.PERSONA_IDPERSONA=31);

DELETE FROM EMPLEADOXJEFE WHERE EMPLEADO_IDEMPLEADO IN (SELECT E.IDEMPLEADO
                                                        FROM EMPLEADO E
                                                        INNER JOIN PERSONA P ON E.PERSONA_IDPERSONA=P.IDPERSONA
                                                        WHERE E.PERSONA_IDPERSONA=31);

DELETE FROM BONO WHERE EMPLEADO_IDEMPLEADO IN (SELECT E.IDEMPLEADO
                                                        FROM EMPLEADO E
                                                        INNER JOIN PERSONA P ON E.PERSONA_IDPERSONA=P.IDPERSONA
                                                        WHERE E.PERSONA_IDPERSONA=31); 
                                                        
DELETE FROM DEDUCCION WHERE EMPLEADO_IDEMPLEADO IN (SELECT E.IDEMPLEADO
                                                        FROM EMPLEADO E
                                                        INNER JOIN PERSONA P ON E.PERSONA_IDPERSONA=P.IDPERSONA
                                                        WHERE E.PERSONA_IDPERSONA=31);
 DELETE FROM EMPLEADOXPLANILLA WHERE EMPLEADO_IDEMPLEADO IN (SELECT E.IDEMPLEADO
                                                        FROM EMPLEADO E
                                                        INNER JOIN PERSONA P ON E.PERSONA_IDPERSONA=P.IDPERSONA
                                                        WHERE E.PERSONA_IDPERSONA=31);   
                                                        
 DELETE FROM ANTICIPO WHERE EMPLEADO_IDEMPLEADO IN (SELECT E.IDEMPLEADO
                                                        FROM EMPLEADO E
                                                        INNER JOIN PERSONA P ON E.PERSONA_IDPERSONA=P.IDPERSONA
                                                        WHERE E.PERSONA_IDPERSONA=31);  

DELETE FROM TRIPULANTEXVUELO WHERE TRIPULANTE_IDTRIPULANTE IN (SELECT T.IDTRIPULANTE
                                                                FROM EMPLEADO E
                                                                INNER JOIN PERSONA P ON E.PERSONA_IDPERSONA=P.IDPERSONA
                                                                INNER JOIN TRIPULANTE T ON E.IDEMPLEADO=T.EMPLEADO_IDEMPLEADO 
                                                                WHERE P.IDPERSONA=31);

DELETE FROM LICENCIA WHERE TRIPULANTE_IDTRIPULANTE IN (SELECT T.IDTRIPULANTE
                                                                FROM EMPLEADO E
                                                                INNER JOIN PERSONA P ON E.PERSONA_IDPERSONA=P.IDPERSONA
                                                                INNER JOIN TRIPULANTE T ON E.IDEMPLEADO=T.EMPLEADO_IDEMPLEADO 
                                                                WHERE P.IDPERSONA=31);
DELETE FROM TRIPULANTE WHERE IDTRIPULANTE IN (SELECT T.IDTRIPULANTE
                                                                FROM EMPLEADO E
                                                                INNER JOIN PERSONA P ON E.PERSONA_IDPERSONA=P.IDPERSONA
                                                                INNER JOIN TRIPULANTE T ON E.IDEMPLEADO=T.EMPLEADO_IDEMPLEADO 
                                                                WHERE P.IDPERSONA=31);
                                                                                            
DELETE FROM EMPLEADO WHERE IDEMPLEADO IN (SELECT E.IDEMPLEADO
                                                        FROM EMPLEADO E
                                                        INNER JOIN PERSONA P ON E.PERSONA_IDPERSONA=P.IDPERSONA
                                                        WHERE E.PERSONA_IDPERSONA=31); 
                                                        
    
/*ELIMINAR PERSONA*/    
DELETE FROM TELEFONO WHERE IDTELEFONO IN (SELECT T.IDTELEFONO
                                        FROM TELEFONO T
                                        INNER JOIN PERSONA P ON T.PERSONA_IDPERSONA=P.IDPERSONA
                                        WHERE T.PERSONA_IDPERSONA=31); 
                                        
DELETE FROM PERSONA WHERE IDPERSONA=31;