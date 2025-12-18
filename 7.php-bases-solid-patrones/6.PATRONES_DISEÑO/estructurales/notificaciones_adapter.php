<?php

// Servicio antiguo de notificaciones por SMS
class NotificacionSMS {
    public function enviarSMS($numero, $mensaje) {
        echo "Enviando SMS a $numero: $mensaje";
    }
}

// Servicio nuevo de notificaciones por correo electrónico
class NotificacionEmail {
    public function enviarEmail($email, $mensaje) {
        echo "Enviando Email a $email: $mensaje";
    }
}

// Código cliente que usa ambos servicios
// $sms = new NotificacionSMS();
// $sms->enviarSMS('1234567890', 'Hola, este es un mensaje SMS.');

// $email = new NotificacionEmail();
// $email->enviarEmail('ejemplo@correo.com', 'Hola, este es un mensaje de correo electrónico.');

#APLICANDO PATRON ADAPTER
// Interface común para notificaciones
interface Notificacion {
    public function enviar($destino, $mensaje);
}

// Adaptador para el servicio antiguo de SMS
class NotificacionSMSAdapter implements Notificacion {
    private $notificacionSMS;

    public function __construct(NotificacionSMS $notificacionSMS) {
        $this->notificacionSMS = $notificacionSMS;
    }

    public function enviar($destino, $mensaje) {
        $this->notificacionSMS->enviarSMS($destino, $mensaje);
    }
}

// Adaptador para el servicio nuevo de Email
class NotificacionEmailAdapter implements Notificacion {
    private $notificacionEmail;

    public function __construct(NotificacionEmail $notificacionEmail) {
        $this->notificacionEmail = $notificacionEmail;
    }

    public function enviar($destino, $mensaje) {
        $this->notificacionEmail->enviarEmail($destino, $mensaje);
    }
}

// Código cliente que usa la interface común
function enviarNotificacion(Notificacion $notificacion, $destino, $mensaje) {
    $notificacion->enviar($destino, $mensaje);
}

// Uso con el patrón Adapter
$smsAdapter = new NotificacionSMSAdapter(new NotificacionSMS());
$emailAdapter = new NotificacionEmailAdapter(new NotificacionEmail());

enviarNotificacion($smsAdapter, '1234567890', 'Hola, este es un mensaje SMS.');
echo "<br>";
enviarNotificacion($emailAdapter, 'ejemplo@correo.com', 'Hola, este es un mensaje de correo electrónico.');


?>