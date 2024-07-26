<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Estacion extends Model{
    protected $fillable =[
        'name','address','latitude','longitude',
    ];

    public $appends = [
        'coordinate','map_popup_content',
    ];

    public function getNameLinkAttribute(){
        $title = __('app.show_detail_title',[
            'name'=>$this->name, 'type'=>__('estacion.estacion'),
        ]);
        $link = '<a href="'.route('estaciones.show',$this).'"';
        $link .=' title="'.$title.'">';
        $link .= $this->name;
        $link .= '</a>';

        return $link;
    }
    
    public function getCoordinateAttribute(){
        if($this->latitude && $this->longitude){
            return $this->latitude.', '.$this->longitude;
        }
    }

    public function getMapPopupContentAttribute(){
        $mapPopupContent ='';
        $mapPopupContent.='<div class="my-2"><strong>'.__('estacion.name').':</strong><br>'.$this->name_link.'</div>';
        $mapPopupContent.='<div class="my-2"><strong>'.__('estacion.coordinate').':</strong><br>'.$this->coordinate.'</div>';

        return $mapPopupContent;
    }
}