<?php

class __Mustache_29084e5af54ed31c2c1306282bedc4fe extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="form-empty">
';
        $buffer .= $indent . '    <input type="hidden" name="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" value="">
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
