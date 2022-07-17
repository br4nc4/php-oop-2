<?php

trait Validator{
    private function validateStrings($str){
        if(!isset($str) || strlen(trim($str)) === 0 || !is_string($str)){
            throw new Exception("il testo inserito non è valido");
        }
    }
    private function validateCreditNumber($creditNum){
        if(strlen($creditNum) > 16) {
            throw new Exception("Il numero della carta di credito non è valido");
        }
    }
}