<?php

/**Supongamos que necesitamos un sistema que envíe notificaciones por Email, SMS, y Push Notifications. */

class NotificationService {
    public function sendNotification($type, $message) {
        if ($type === 'email') {
            echo "Enviando Email: $message\n";
        } elseif ($type === 'sms') {
            echo "Enviando SMS: $message\n";
        } elseif ($type === 'push') {
            echo "Enviando Push Notification: $message\n";
        } else {
            echo "Tipo de notificación no soportado.\n";
        }
    }
}

// Uso
$service = new NotificationService();
$service->sendNotification('email', '¡Hola, tienes un nuevo mensaje!');
$service->sendNotification('sms', '¡Tu pedido ha sido enviado!');
