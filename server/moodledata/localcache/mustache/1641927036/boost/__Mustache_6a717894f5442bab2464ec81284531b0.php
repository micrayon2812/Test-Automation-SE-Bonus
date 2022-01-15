<?php

class __Mustache_6a717894f5442bab2464ec81284531b0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<ul>
';
        // 'start' section
        $value = $context->find('start');
        $buffer .= $this->section877577c01e3cb6c7ef95136ed4233d93($context, $indent, $value);
        // 'end' section
        $value = $context->find('end');
        $buffer .= $this->section0cff7edf4eff92b240e5fe4c269c0678($context, $indent, $value);
        $buffer .= $indent . '    <li>
';
        // 'visible' section
        $value = $context->find('visible');
        $buffer .= $this->section6db1ad599f27380d2c2c575f437cab5d($context, $indent, $value);
        // 'visible' inverted section
        $value = $context->find('visible');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionF47b85b884f7419363d9acf74d9b42ad($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '    </li>
';
        $buffer .= $indent . '</ul>
';

        return $buffer;
    }

    private function sectionF4e16e061960a196ec6b5f2437ea8277(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'strftimerecentfull ';
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
                
                $buffer .= 'strftimerecentfull ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24ff06191b18882ceaed7cc3b01f6b89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}}, {{#str}}strftimerecentfull {{/str}}';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF4e16e061960a196ec6b5f2437ea8277($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63ec6ba864df715dd4798066d6a489c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' displaystartdate, mod_forum, {{#userdate}}{{.}}, {{#str}}strftimerecentfull {{/str}}{{/userdate}} ';
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
                
                $buffer .= ' displaystartdate, mod_forum, ';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->section24ff06191b18882ceaed7cc3b01f6b89($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section877577c01e3cb6c7ef95136ed4233d93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li>
        {{#str}} displaystartdate, mod_forum, {{#userdate}}{{.}}, {{#str}}strftimerecentfull {{/str}}{{/userdate}} {{/str}}
    </li>
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
                
                $buffer .= $indent . '    <li>
';
                $buffer .= $indent . '        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section63ec6ba864df715dd4798066d6a489c3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD85939ef71115a1e64355b1b58021a11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' displayenddate, mod_forum, {{#userdate}}{{.}}, {{#str}}strftimerecentfull {{/str}}{{/userdate}} ';
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
                
                $buffer .= ' displayenddate, mod_forum, ';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->section24ff06191b18882ceaed7cc3b01f6b89($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0cff7edf4eff92b240e5fe4c269c0678(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li>
        {{#str}} displayenddate, mod_forum, {{#userdate}}{{.}}, {{#str}}strftimerecentfull {{/str}}{{/userdate}} {{/str}}
    </li>
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
                
                $buffer .= $indent . '    <li>
';
                $buffer .= $indent . '        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD85939ef71115a1e64355b1b58021a11($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc0bfcb9a3fb4fb0120f0c94c442609a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' timedvisible, mod_forum ';
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
                
                $buffer .= ' timedvisible, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6db1ad599f27380d2c2c575f437cab5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#str}} timedvisible, mod_forum {{/str}}
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
                
                $buffer .= $indent . '        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionFc0bfcb9a3fb4fb0120f0c94c442609a($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF47b85b884f7419363d9acf74d9b42ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' timedhidden, mod_forum ';
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
                
                $buffer .= ' timedhidden, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
