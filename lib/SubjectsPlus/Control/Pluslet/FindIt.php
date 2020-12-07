<?php
   namespace SubjectsPlus\Control;
     require_once("Pluslet.php");
/**
 *   @file sp_Pluslet_FindIt
 *   @brief 
 *
 *   @author sandbergja
 *   @date Feb 2020
 *   @todo 
 */
class Pluslet_FindIt extends Pluslet {

    public function __construct($pluslet_id, $flag="", $subject_id, $isclone=0) {
        parent::__construct($pluslet_id, $flag, $subject_id, $isclone);

        $this->_type = "FindIt";
        $this->_pluslet_bonus_classes = "type-findit";

        $this->_title = _("FindIt");
        $this->_hide_titlebar = false;
    }

    static function getMenuName() {
    return _('Find It Search Box');
    }

    public static function getMenuIcon() {
        $icon="<i class=\"fa fa-paper-plane\" title=\"" . _("Find It") . "\" ></i><span class=\"icon-text\">" . _("Find It") . "</span>";
        return $icon;
    }

    protected function onViewOutput() {
        $this->_body = $this->loadHtml(__DIR__ . '/views/FindItViewOutput.php');
    }

    protected function onEditOutput() {
        if($this->_extra == "") {
            $this->_extra = array();
        } else {
            $this->_extra = json_decode( $this->_extra, true );
        }

        $this->_body = "<p class=\"faq-alert\">" . _("Click 'Save' to view your search box.") . "</p>";
    }
}

?>
