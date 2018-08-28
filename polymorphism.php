<?php
interface KendaraanBermotor{
    public function ngeRem();
    public function ngeGas();
    public function mundur();
}
class Mobil implements KendaraanBermotor{
    
    protected $jml_roda;
    
    public function ngeRem(){
        
        return "Ngerem nya pakai Tuas dikaki doang";
    }
    public function ngeGas(){
        
        return "Ngegas nya pakai tuas dikaki";
    }   
    public function mundur(){
        
        return "Ada kontrol khusus mundur, orang gperlu turun";
    }
    
}
class Motor implements KendaraanBermotor{
    
    protected $jml_roda;
    
    public function ngeRem(){
        
        return "Ngerem nya pakai Tuas dikaki atau ditangan";
    }
    public function ngeGas(){
        
        return "Ngegas nya pakai tangan";
    }   
    public function mundur(){
        
        return "Mundur perlu turun atau dorong pake kaki";
    }
    
}
//buat Object
$obj = new Mobil();
echo $obj->ngeGas();
echo $obj->ngeRem();
echo $obj->mundur();
?>