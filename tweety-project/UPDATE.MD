
# *** UPDATE 07/05/2020 ***

-------------------------------------------------
Seccion 1: Trabajo realizado.
-------------------------------------------------
Encontrado nuevo error con respecto al envoirament de la aplicacion. Este error era causado
por la configuracion bootstrap de laravel. En mi caso, no podia acceder a la aplicacion ya que siempre
pedia generar una nueva clave para APP_KEY= y aun generandose, no la reconocia.

Solucion:

Copiar la carpeta al completo de otro proyecto (no le afecta). Limpiar cache y generar nueva
configuracion. Generar nueva clave, limpiar cache y reniciar el servidor.

 #####Testing:

Realizo los testes para el login del usuario. Sigo teniendo problemas ya que los nuesvos metodos
de laravel funcionan completamente distinto. Recomiendan usar Dusk para facilitar el testing.

-------------------------------------------------------
Seccion 2: Bloqueos
---------------------------------------------------------
Sigo bloqueado con los test. No doy avanzado y me planteo un posible cambio a usar un framework destinado para
el testeo. Realizare pruebas esta tarde y si me convence, lo implementare.

----------------------------------------------------------------
 Seccion 3: Planificación del trabajo para el día siguiente
-----------------------------------------------------------------
Dependiendo de los resultados que consiga con el framework esta tarde, pasare a implementarlo
y a testear la aplicacion.
