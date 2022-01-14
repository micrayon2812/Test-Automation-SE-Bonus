<?php

class __Mustache_92ec4cb1b97cf49431eb39566a6cb94f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="eventlist my-1">
';
        // 'events' section
        $value = $context->find('events');
        $buffer .= $this->section150821ab9b35a80d8ba46b67b13be0cb($context, $indent, $value);
        // 'events' inverted section
        $value = $context->find('events');
        if (empty($value)) {
            
            $buffer .= $indent . '        <span class="calendar-information calendar-no-results">
';
            $buffer .= $indent . '            ';
            $blockFunction = $context->findInBlock('noeventsmessage');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            }
            $buffer .= '
';
            $buffer .= $indent . '        </span>
';
        }
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section150821ab9b35a80d8ba46b67b13be0cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core_calendar/event_item }}
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
                
                if ($partial = $this->mustache->loadPartial('core_calendar/event_item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
