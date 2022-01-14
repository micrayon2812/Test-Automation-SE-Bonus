<?php

class __Mustache_eabd4be8e342eea8e04406cb1ae09730 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'helpicon' section
        $value = $context->find('helpicon');
        $buffer .= $this->section3c62650706ab6ca742a43b00e7eabe59($context, $indent, $value);
        if ($parent = $this->mustache->loadPartial('core/search_input')) {
            $buffer .= $parent->renderInternal($context, $indent);
        }

        return $buffer;
    }

    private function section3c62650706ab6ca742a43b00e7eabe59(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{>core/help_icon}}
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
