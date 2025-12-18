<?php

interface Notification {
    public function send(string $message): void;
}

#productos en especifico
class EmailNotification implements Notification {
    public function send(string $message): void {
        echo "Enviando Email: $message\n";
    }
}

class SMSNotification implements Notification {
    public function send(string $message): void {
        echo "Enviando SMS: $message\n";
    }
}

class PushNotification implements Notification {
    public function send(string $message): void {
        echo "Enviando Push Notification: $message\n";
    }
}

#creamos la clase Factory
class NotificationFactory {
    public static function createNotification(string $type): Notification {
        return match ($type) {
            'email' => new EmailNotification(),
            'sms' => new SMSNotification(),
            'push' => new PushNotification(),
            default => throw new Exception("Tipo de notificación no soportado."),
        };
    }
}

#uso del patron factory
try {
    $notification = NotificationFactory::createNotification('email');
    $notification->send('¡Hola, tienes un nuevo mensaje!');
    
    $notification = NotificationFactory::createNotification('sms');
    $notification->send('¡Tu pedido ha sido enviado!');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
