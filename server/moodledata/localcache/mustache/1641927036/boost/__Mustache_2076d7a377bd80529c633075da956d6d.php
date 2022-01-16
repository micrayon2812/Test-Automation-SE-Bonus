<?php

class __Mustache_2076d7a377bd80529c633075da956d6d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'text' section
        $value = $context->find('text');
        $buffer .= $this->sectionEed22aa361dfbb3250fb68fcce085477($context, $indent, $value);

        return $buffer;
    }

    private function section6aff5b39481d5d347daaeead1b7c9a7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'restricted, core';
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
                
                $buffer .= 'restricted, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF78d13987f5ceb263b7b2ff4dc73ae5b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="badge badge-info">{{#str}}restricted, core{{/str}}</span> {{{text}}}
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
                
                $buffer .= $indent . '    <span class="badge badge-info">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6aff5b39481d5d347daaeead1b7c9a7d($context, $indent, $value);
                $buffer .= '</span> ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEed22aa361dfbb3250fb68fcce085477(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="availabilityinfo {{classes}}">
    {{^isrestricted}}
    <span class="badge badge-info">{{{text}}}</span>
    {{/isrestricted}}
    {{#isrestricted}}
    <span class="badge badge-info">{{#str}}restricted, core{{/str}}</span> {{{text}}}
    {{/isrestricted}}
</div>
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
                
                $buffer .= $indent . '<div class="availabilityinfo ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'isrestricted' inverted section
                $value = $context->find('isrestricted');
                if (empty($value)) {
                    
                    $buffer .= $indent . '    <span class="badge badge-info">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</span>
';
                }
                // 'isrestricted' section
                $value = $context->find('isrestricted');
                $buffer .= $this->sectionF78d13987f5ceb263b7b2ff4dc73ae5b($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
