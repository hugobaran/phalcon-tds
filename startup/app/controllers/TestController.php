<?php
class TestController extends ControllerBase
{
    protected $semantic;
    public function initialize(){
        $this->semantic=$this->jquery->semantic();
    }
    /**
     * Default action
     */
    public function indexAction(){
    }
    public function hideShowAction(){
        $ckShowHide = $this->semantic->htmlCheckbox("ckShowHide","Masquer/afficher");
        $message = $this->semantic->htmlMessage("zone");
        $ckShowHide->on("change",$message->jsToggle("$(this).prop('checked')"));
        $this->jquery->compile($this->view);
    }
}