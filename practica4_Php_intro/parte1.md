
## Ejercicio 1

### Variables:

- a → boolean
- b → string
- c → string
- d → integer
- f → integer
- g → integer

### Operadores:

- = → asignación
- += → suma y asignación
- ? … : … → operador ternario
- $d++ → post-incremento
- ++$d → pre-incremento
- - → producto

### Funciones :

- doble() → Parametro que se envia $d++
- gettype() → Parametros que se envian $a, $b, $c, $d
- is_int() → Parametro que se envia $d
- is_string() → Parametro que se envia $a

### Estructuras de control:

- `if (is_int($d)) { $d += 4; }`
- `if (is_string($a)) { echo "Cadena: $a"; }`

### Salida por pantalla:

`booleanstringstringinteger1xyzxyz184444`

## Ejercicio 2

a. Los códigos son equivalentes.
b. Los códigos son equivalentes.
c. Los códigos son equivalentes.

## Ejercicio 3

1. El código genera una tabla cuyo número de filas y columnas se determina por los valores de $row y $col. Las celdas están vacías.
2. El código muestra dos pantallas diferentes dependiendo de la request http. Cuando un suario navegue incialemnte a la pagina lo hará con el metodo GET por lo que !isset($_POST['submit']) sera true y se mostrar el primer formulario que permite ingresar la edad.
El formulario se envia hacia el mismo archivo php, y se enviara con POST con los valores de age y submit.Es por esto que no se mostrara el formulario, sino el texto genrado en el el else. El codigo que esta en el else muestra la edad ingreasda en el formulario es de un mayor de edad o no.

## Ejercicio 4

El programa intentará hacer el primer print `(echo “El $flor $color \n”;)` pero como no se realizo el include hasta ese momento del archivo datos.php tiraría un error de variables indefinidas. Sin embargo, para el siguiente print, se escribió la línea include ‘datos.php’ por lo que el interprete sabra el valor de la variabla y la salida sería la esperada: El clavel blanco.

