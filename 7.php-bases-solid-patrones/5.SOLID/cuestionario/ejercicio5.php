<?php 

interface Printer {
    public function printDocument($document);
}

interface Scanner {
    public function scanDocument($document);
}

class MultiFunctionPrinter implements Printer, Scanner {
    public function printDocument($document) {
        echo "Imprimiendo documento: $document";
    }

    public function scanDocument($document) {
        echo "Escaneando documento: $document";
    }
}

class SimplePrinter implements Printer {
    public function printDocument($document) {
        echo "Imprimiendo documento: $document";
    }
}
