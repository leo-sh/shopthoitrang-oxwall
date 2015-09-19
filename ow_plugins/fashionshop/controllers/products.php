<?php
/**
* 
*/
class FASHIONSHOP_CTRL_Products extends OW_ActionController
{
	
	public function manager() {
		// echo 'hello Fashion shop';die();
		$language = OW::getLanguage();
        
        OW::getDocument()->setTitle($language->text("fashionshop", "forms_page_title"));
        OW::getDocument()->setHeading($language->text("fashionshop", "forms_page_heading"));
        
        $form = new FASHIONSHOP_CLASS_Forms("fashionshop_form");
        $form->setMethod(Form::METHOD_POST);
        $form->setEnctype(Form::ENCTYPE_MULTYPART_FORMDATA);
        
        $this->addForm($form);

        $form->getElement("extended_text");
        $form->getElement("selectbox")->setValue(2);
        $form->getElement("multichoice")->setValue(array(2, 3));
        
        $submitedFields = array();
        
        if ( OW::getRequest()->isPost() && $form->isValid($_POST) )
        {
            $values = $form->getValues();
            $form->reset();
            
            foreach ( $form->getElements() as $element )
            {
                /* @var $element FormElement */
                if ($element->getName() == 'file')
                {
                    $submitedFields[] = array(
                        "label" => $element->getName(),
                        "value" => $_FILES['file']['name'].' ('.$_FILES['file']['size'].' bytes)'
                    );
                }
                else
                {
                    $submitedFields[] = array(
                        "label" => $element->getName(),
                        "value" => is_array($values[$element->getName()]) ? implode(", ", $values[$element->getName()]) : $values[$element->getName()]
                    );
                }
            }

            $this->assign("submitedFields", $submitedFields);
        }
	}
}