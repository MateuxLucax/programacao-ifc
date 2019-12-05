<?php

class Simples {

    private $bichoUsuarios;

    public function setBichoUsuario($bichoUsuario) {
        $this->bichoUsuario = $bichoUsuario;
    }

    public function getBichoUsuario() {
        return $this->bichoUsuario;
    }

    public function parNumeroAleatorio() {
        return random_int(0, 99);
    }

    public function sorteiaNumero() {
        return random_int(1, 99);
    }
    
    public function sorteio() {
        return str_pad($this->sorteiaNumero() , 2, '0' , STR_PAD_LEFT) . str_pad($this->sorteiaNumero() , 2, '0' , STR_PAD_LEFT);
    }

    public function verificaSorteioUsuario($sorteio) {
        $valorSorteio = substr($sorteio, 2, 2);
        switch ($valorSorteio) {
            case 1:
            case 2:
            case 3:
            case 4:
                $bichoSorteado = 1;
                break;
            case 5:
            case 6:
            case 7:
            case 8:
                $bichoSorteado = 2;
                break;
            case 9:
            case 10:
            case 11:
            case 12:
                $bichoSorteado = 3;
                break;
            case 13:
            case 14:
            case 15:
            case 16:
                $bichoSorteado = 4;
                break;
            case 17:
            case 18:
            case 19:
            case 20:
                $bichoSorteado = 5;
                break;
            case 21:
            case 22:
            case 23:
            case 24:
                $bichoSorteado = 6;
                break;
            case 25:
            case 26:
            case 27:
            case 28:
                $bichoSorteado = 7;
                break;
            case 29:
            case 30:
            case 31:
            case 32:
                $bichoSorteado = 8;
                break;
            case 33:
            case 34:
            case 35:
            case 36:
                $bichoSorteado = 9;
                break;
            case 37:
            case 38:
            case 39:
            case 40:
                $bichoSorteado = 10;
                break;
            case 41:
            case 42:
            case 43:
            case 44:
                $bichoSorteado = 11;
                break;
            case 45:
            case 46:
            case 47:
            case 48:
                $bichoSorteado = 12;
                break;
            case 49:
            case 50:
            case 51:
            case 52:
                $bichoSorteado = 13;
                break;
            case 53:
            case 54:
            case 55:
            case 56:
                $bichoSorteado = 14;
                break;
            case 57:
            case 58:
            case 59:
            case 60:
                $bichoSorteado = 15;
                break;
            case 61:
            case 62:
            case 63:
            case 64:
                $bichoSorteado = 16;
                break;
            case 65:
            case 66:
            case 67:
            case 68:
                $bichoSorteado = 17;
                break;
            case 69:
            case 70:
            case 71:
            case 72:
                $bichoSorteado = 18;
                break;
            case 73:
            case 74:
            case 75:
            case 76:
                $bichoSorteado = 19;
                break;
            case 77:
            case 78:
            case 79:
            case 80:
                $bichoSorteado = 20;
                break;
            case 81:
            case 82:
            case 83:
            case 84:
                $bichoSorteado = 21;
                break;
            case 85:
            case 86:
            case 87:
            case 88:
                $bichoSorteado = 22;
                break;
            case 89:
            case 90:
            case 91:
            case 92:
                $bichoSorteado = 23;
                break;
            case 93:
            case 94:
            case 95:
            case 96:
                $bichoSorteado = 24;
                break;
            case 97:
            case 98:
            case 99:
            case 00:
                $bichoSorteado = 25;
                break;
            default:
                $bichoSorteado = 0;
                break;
        }
        if ($bichoSorteado == $this->bichoUsuario) {
            return true;
        } else {
            return false;
        }
    }

    public function bicho($sorteio) {
        $valorSorteio = substr($sorteio, 2, 2);
        switch ($valorSorteio) {
            case 1:
            case 2:
            case 3:
            case 4:
                $bichoSorteado = 'Avestruz';
                break;
            case 5:
            case 6:
            case 7:
            case 8:
                $bichoSorteado = 'Águia';
                break;
            case 9:
            case 10:
            case 11:
            case 12:
                $bichoSorteado = 'Burro';
                break;
            case 13:
            case 14:
            case 15:
            case 16:
                $bichoSorteado = 'Borboleta';
                break;
            case 17:
            case 18:
            case 19:
            case 20:
                $bichoSorteado = 'Cachorro';
                break;
            case 21:
            case 22:
            case 23:
            case 24:
                $bichoSorteado = 'Cabra';
                break;
            case 25:
            case 26:
            case 27:
            case 28:
                $bichoSorteado = 'Carneiro';
                break;
            case 29:
            case 30:
            case 31:
            case 32:
                $bichoSorteado = 'Camelo';
                break;
            case 33:
            case 34:
            case 35:
            case 36:
                $bichoSorteado = 'Cobra';
                break;
            case 37:
            case 38:
            case 39:
            case 40:
                $bichoSorteado = 'Coelho';
                break;
            case 41:
            case 42:
            case 43:
            case 44:
                $bichoSorteado = 'Cavalo';
                break;
            case 45:
            case 46:
            case 47:
            case 48:
                $bichoSorteado = 'Elefante';
                break;
            case 49:
            case 50:
            case 51:
            case 52:
                $bichoSorteado = 'Galo';
                break;
            case 53:
            case 54:
            case 55:
            case 56:
                $bichoSorteado = 'Gato';
                break;
            case 57:
            case 58:
            case 59:
            case 60:
                $bichoSorteado = 'Jacaré';
                break;
            case 61:
            case 62:
            case 63:
            case 64:
                $bichoSorteado = 'Leão';
                break;
            case 65:
            case 66:
            case 67:
            case 68:
                $bichoSorteado = 'Macaco';
                break;
            case 69:
            case 70:
            case 71:
            case 72:
                $bichoSorteado = 'Porco';
                break;
            case 73:
            case 74:
            case 75:
            case 76:
                $bichoSorteado = 'Pavão';
                break;
            case 77:
            case 78:
            case 79:
            case 80:
                $bichoSorteado = 'Peru';
                break;
            case 81:
            case 82:
            case 83:
            case 84:
                $bichoSorteado = 'Touro';
                break;
            case 85:
            case 86:
            case 87:
            case 88:
                $bichoSorteado = 'Tigre';
                break;
            case 89:
            case 90:
            case 91:
            case 92:
                $bichoSorteado = 'Urso';
                break;
            case 93:
            case 94:
            case 95:
            case 96:
                $bichoSorteado = 'Veado';
                break;
            case 97:
            case 98:
            case 99:
            case 00:
                $bichoSorteado = 'Vaca';
                break;
            default:
                $bichoSorteado = 0;
                break;
        }
        return $bichoSorteado;
    }

    public function bichoImagem($sorteio) {
        $valorSorteio = substr($sorteio, 2, 2);
        switch ($valorSorteio) {
            case 1:
            case 2:
            case 3:
            case 4:
                $bichoSorteado = 'avestruz';
                break;
            case 5:
            case 6:
            case 7:
            case 8:
                $bichoSorteado = 'aguia';
                break;
            case 9:
            case 10:
            case 11:
            case 12:
                $bichoSorteado = 'burro';
                break;
            case 13:
            case 14:
            case 15:
            case 16:
                $bichoSorteado = 'borboleta';
                break;
            case 17:
            case 18:
            case 19:
            case 20:
                $bichoSorteado = 'cachorro';
                break;
            case 21:
            case 22:
            case 23:
            case 24:
                $bichoSorteado = 'cabra';
                break;
            case 25:
            case 26:
            case 27:
            case 28:
                $bichoSorteado = 'carneiro';
                break;
            case 29:
            case 30:
            case 31:
            case 32:
                $bichoSorteado = 'camelo';
                break;
            case 33:
            case 34:
            case 35:
            case 36:
                $bichoSorteado = 'cobra';
                break;
            case 37:
            case 38:
            case 39:
            case 40:
                $bichoSorteado = 'coelho';
                break;
            case 41:
            case 42:
            case 43:
            case 44:
                $bichoSorteado = 'cavalo';
                break;
            case 45:
            case 46:
            case 47:
            case 48:
                $bichoSorteado = 'elefante';
                break;
            case 49:
            case 50:
            case 51:
            case 52:
                $bichoSorteado = 'galo';
                break;
            case 53:
            case 54:
            case 55:
            case 56:
                $bichoSorteado = 'gato';
                break;
            case 57:
            case 58:
            case 59:
            case 60:
                $bichoSorteado = 'jacare';
                break;
            case 61:
            case 62:
            case 63:
            case 64:
                $bichoSorteado = 'leao';
                break;
            case 65:
            case 66:
            case 67:
            case 68:
                $bichoSorteado = 'macaco';
                break;
            case 69:
            case 70:
            case 71:
            case 72:
                $bichoSorteado = 'porco';
                break;
            case 73:
            case 74:
            case 75:
            case 76:
                $bichoSorteado = 'pavao';
                break;
            case 77:
            case 78:
            case 79:
            case 80:
                $bichoSorteado = 'peru';
                break;
            case 81:
            case 82:
            case 83:
            case 84:
                $bichoSorteado = 'touro';
                break;
            case 85:
            case 86:
            case 87:
            case 88:
                $bichoSorteado = 'tigre';
                break;
            case 89:
            case 90:
            case 91:
            case 92:
                $bichoSorteado = 'urso';
                break;
            case 93:
            case 94:
            case 95:
            case 96:
                $bichoSorteado = 'veado';
                break;
            case 97:
            case 98:
            case 99:
            case 00:
                $bichoSorteado = 'vaca';
                break;
            default:
                $bichoSorteado = 0;
                break;
        }
        return $bichoSorteado;
    }

}

?>