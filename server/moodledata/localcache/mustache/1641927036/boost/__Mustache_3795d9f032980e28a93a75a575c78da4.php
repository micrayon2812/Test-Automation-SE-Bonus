<?php

class __Mustache_3795d9f032980e28a93a75a575c78da4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('mod_forum/discussion_list')) {
            $context->pushBlockContext(array(
                'discussion_create_text' => array($this, 'blockBc2ffef3519e50bead3e520947376572'),
                'no_discussions_text' => array($this, 'blockE52740614d280d0611bcfcfbcfa93722'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function sectionEcfce418daf3acedbc7f31951ebf57d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addanewtopic, forum';
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
                
                $buffer .= 'addanewtopic, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf409e3e923b15cb6b9837b5685db684(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nonews, forum';
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
                
                $buffer .= 'nonews, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockBc2ffef3519e50bead3e520947376572($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionEcfce418daf3acedbc7f31951ebf57d5($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function blockE52740614d280d0611bcfcfbcfa93722($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        (';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionDf409e3e923b15cb6b9837b5685db684($context, $indent, $value);
        $buffer .= ')
';
    
        return $buffer;
    }
}
