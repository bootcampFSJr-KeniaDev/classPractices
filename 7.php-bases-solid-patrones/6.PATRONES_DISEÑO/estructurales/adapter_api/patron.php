<?php

#define la interfaz del sistema
interface UserProvider {
    public function getUser(): array;
}

#suponiendo que esta es la api antigua
class OldApi {
    public function fetchUserData(): array {
        $data = file_get_contents('data_old.json');
        $array_data = json_decode($data, true);
        return $array_data;
    }
}

#creamos el adapter
class UserAdapter implements UserProvider{
    private OldApi $oldapi;

    public function __construct(OldApi $oldapi)
    {
        $this->oldapi = $oldapi;
    }

    public function getUser(): array
    {
        $old_data = $this->oldapi->fetchUserData();
        // Adaptar el formato antiguo al nuevo
        return [
            'name' => $old_data['first_name'] . ' ' . $old_data['last_name'],
            'contact' => $old_data['phone']
        ];
    }
}

//uso del adapter
$oldapi = new OldApi();

//creamos el adapter
$adapter = new UserAdapter($oldapi);
//el sistema nuevo obtiene datos en el formato esperado
$new_user = $adapter->getUser();
echo json_encode($new_user, true);