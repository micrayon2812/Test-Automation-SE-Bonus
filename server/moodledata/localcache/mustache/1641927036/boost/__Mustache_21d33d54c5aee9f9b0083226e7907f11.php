<?php

class __Mustache_21d33d54c5aee9f9b0083226e7907f11 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_form/element-group')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
