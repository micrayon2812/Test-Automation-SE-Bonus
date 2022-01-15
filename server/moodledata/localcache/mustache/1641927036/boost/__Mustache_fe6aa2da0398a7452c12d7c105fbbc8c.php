<?php

class __Mustache_fe6aa2da0398a7452c12d7c105fbbc8c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('mod_forum/forum_discussion_post')) {
            $context->pushBlockContext(array(
                'replies' => array($this, 'block8a7fd40197e308dd9e780bd823ea28be'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section2f725d1844edf8da26d7064d4e70390c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> mod_forum/forum_discussion_nested_post }}
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
                
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_discussion_nested_post')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block8a7fd40197e308dd9e780bd823ea28be($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="indent" data-region="replies-container">
';
        // 'replies' section
        $value = $context->find('replies');
        $buffer .= $this->section2f725d1844edf8da26d7064d4e70390c($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
    
        return $buffer;
    }
}
