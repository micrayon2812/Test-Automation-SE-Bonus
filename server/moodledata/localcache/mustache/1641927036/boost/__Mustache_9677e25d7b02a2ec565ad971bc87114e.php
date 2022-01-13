<?php

class __Mustache_9677e25d7b02a2ec565ad971bc87114e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-group')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'block2d93bf261670f481de26742a3079b229'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section86579468c813d19c6be8d55491ef4e7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{separator}}}
                {{{html}}}
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
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('separator'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('html'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block2d93bf261670f481de26742a3079b229($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <fieldset data-fieldtype="date_time" class="m-0 p-0 border-0" id="';
        $value = $this->resolveValue($context->findDot('element.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <legend class="sr-only">';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</legend>
';
        $buffer .= $indent . '            <div class="fdate_time_selector d-flex flex-wrap align-items-center">
';
        // 'element.elements' section
        $value = $context->findDot('element.elements');
        $buffer .= $this->section86579468c813d19c6be8d55491ef4e7d($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </fieldset>
';
    
        return $buffer;
    }
}
