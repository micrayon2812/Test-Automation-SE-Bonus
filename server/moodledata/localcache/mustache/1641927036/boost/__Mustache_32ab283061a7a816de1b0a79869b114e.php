<?php

class __Mustache_32ab283061a7a816de1b0a79869b114e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="form-file defaultsnext">
';
        $buffer .= $indent . '    <div class="form-inline">
';
        $buffer .= $indent . '        <input type="text" name="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" size="';
        $value = $this->resolveValue($context->find('size'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" value="';
        $value = $this->resolveValue($context->find('value'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="form-control text-ltr" ';
        // 'readonly' section
        $value = $context->find('readonly');
        $buffer .= $this->sectionBd6d241829fcbe59e01506b6f6c8d128($context, $indent, $value);
        $buffer .= '>
';
        // 'showvalidity' section
        $value = $context->find('showvalidity');
        $buffer .= $this->section2270e7aa5c49e4a314dfc178e39e16cc($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionBd6d241829fcbe59e01506b6f6c8d128(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'readonly';
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
                
                $buffer .= 'readonly';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9a2176dcdd5f2527583e20ff809a3f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span class="text-success">&#x2714;</span>
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
                
                $buffer .= $indent . '                <span class="text-success">&#x2714;</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2270e7aa5c49e4a314dfc178e39e16cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#valid}}
                <span class="text-success">&#x2714;</span>
            {{/valid}}
            {{^valid}}
                <span class="text-danger">&#x2718;</span>
            {{/valid}}
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
                
                // 'valid' section
                $value = $context->find('valid');
                $buffer .= $this->sectionD9a2176dcdd5f2527583e20ff809a3f1($context, $indent, $value);
                // 'valid' inverted section
                $value = $context->find('valid');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <span class="text-danger">&#x2718;</span>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
