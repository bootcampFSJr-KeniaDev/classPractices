<?php
class Nodo{
    // El valor que contiene el nodo, en este caso, un número
    public $data;
    // El valor que contiene el nodo, en este caso, un número
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class ListaEnlazada{
    // La referencia al primer nodo de la lista
    private $head;
    
    public function __construct() {
        $this->head = null;
    }

    // Método para agregar un nodo al final de la lista
    public function agregarNodo($data) {
        //instanciamos la clase Nodo y solicitamos el dato
        $nuevoNodo = new Nodo($data);
        if ($this->head === null) {
            $this->head = $nuevoNodo;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $nuevoNodo;
        }
    }

    /**
     * Recorremosla lista enlazada y mostrar el valor de data
     */
    public function mostrarLista() {
        //inicializamos el current con la referencia del primer nodo de la lista
        $current = $this->head;
        //se va ejecutar mientras que sea diferente de null
        while ($current !== null) {
            //una vez imprimido valor del nodo actualizamos el current con el siguiente de la lista
            echo $current->data . " ";
            $current = $current->next;
        }
        //imprime un salto de linea
        echo PHP_EOL;
    }


    // Método para eliminar un nodo por su valor
    public function eliminarNodo($data) {
        //primero comprobamos si la lista esta vacia
        if ($this->head === null) {
            return;
        }

        //comprobamos si el nodo que vamos a eliminar es el primero
        if ($this->head->data === $data) {
            //si es asi actualizamos el head con el siguiente nodo
            $this->head = $this->head->next;
            return;
        }

        //si no cumple con las condiciones, el current hace referencia al primer nodo de la lista
        $current = $this->head;
        //y vamos iterando mientras mientras no se llegue al final de la lista y sea diferente el nodo al que solicita el usuario
        while ($current->next !== null && $current->next->data !== $data) {
            //actualizamos el curren con los nodos siguientes
            $current = $current->next;
        }
        //si encuentra el nodo actualiza el current y actualizamos con el siguiente para eliminarlo
        if ($current->next !== null) {
            $current->next = $current->next->next;
        }
    }
}

$lista = new ListaEnlazada();

// Agregamos algunos números a la lista
$lista->agregarNodo(10);
$lista->agregarNodo(20);
$lista->agregarNodo(30);
//REFERENCIA DE LA LISTA
//head -> Nodo(10) -> Nodo(20) -> Nodo(30) -> null

echo "Lista después de agregar nodos: ";
$lista->mostrarLista();  // Debería mostrar: 10 20 30 

// Eliminamos un número de la lista
$lista->eliminarNodo(20);
echo "<br>";
echo "Lista después de eliminar el nodo con valor 20: ";
$lista->mostrarLista();  // Debería mostrar: 10 30


?>