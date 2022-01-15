<?php

class __Mustache_d894f66515f8b0d400cbed9f388665b6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'capabilities.favourite' section
        $value = $context->findDot('capabilities.favourite');
        $buffer .= $this->sectionF0a87c7273309eacf36e07212ea880f1($context, $indent, $value);

        return $buffer;
    }

    private function section7886e55de6404cd7009bb9e34c559672(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'removefromfavourites, mod_forum';
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
                
                $buffer .= 'removefromfavourites, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section489bc68c7c8bc078f43dd3039de4bb77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            data-targetstate="0"
            title="{{#str}}removefromfavourites, mod_forum{{/str}}"
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
                
                $buffer .= $indent . '            data-targetstate="0"
';
                $buffer .= $indent . '            title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7886e55de6404cd7009bb9e34c559672($context, $indent, $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section25fd04774869002914ff7f1fa61234b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addtofavourites, mod_forum';
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
                
                $buffer .= 'addtofavourites, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section291f5af3a4572ec076c453f1d5aeec6a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#str}}removefromfavourites, mod_forum{{/str}}
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
                
                $buffer .= $indent . '                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7886e55de6404cd7009bb9e34c559672($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0a87c7273309eacf36e07212ea880f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a
        class="{{$classes}}dropdown-item menu-action{{/classes}}"
        role="{{$role}}menuitem{{/role}}"
        data-type="favorite-toggle"
        data-action="toggle"
        data-discussionid="{{id}}"
        data-forumid="{{forumid}}"
        tabindex="-1"
        href=""
        {{#userstate.favourited}}
            data-targetstate="0"
            title="{{#str}}removefromfavourites, mod_forum{{/str}}"
        {{/userstate.favourited}}
        {{^userstate.favourited}}
            data-targetstate="1"
            title="{{#str}}addtofavourites, mod_forum{{/str}}"
        {{/userstate.favourited}}
    >
        <span class="menu-action-text">
            {{$favouritecontent}}
                {{#userstate.favourited}}
                    {{#str}}removefromfavourites, mod_forum{{/str}}
                {{/userstate.favourited}}
                {{^userstate.favourited}}
                    {{#str}}addtofavourites, mod_forum{{/str}}
                {{/userstate.favourited}}
            {{/favouritecontent}}
        </span>
    </a>
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
                
                $buffer .= $indent . '    <a
';
                $buffer .= $indent . '        class="';
                $blockFunction = $context->findInBlock('classes');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= 'dropdown-item menu-action';
                }
                $buffer .= '"
';
                $buffer .= $indent . '        role="';
                $blockFunction = $context->findInBlock('role');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= 'menuitem';
                }
                $buffer .= '"
';
                $buffer .= $indent . '        data-type="favorite-toggle"
';
                $buffer .= $indent . '        data-action="toggle"
';
                $buffer .= $indent . '        data-discussionid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '        data-forumid="';
                $value = $this->resolveValue($context->find('forumid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '        tabindex="-1"
';
                $buffer .= $indent . '        href=""
';
                // 'userstate.favourited' section
                $value = $context->findDot('userstate.favourited');
                $buffer .= $this->section489bc68c7c8bc078f43dd3039de4bb77($context, $indent, $value);
                // 'userstate.favourited' inverted section
                $value = $context->findDot('userstate.favourited');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            data-targetstate="1"
';
                    $buffer .= $indent . '            title="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section25fd04774869002914ff7f1fa61234b9($context, $indent, $value);
                    $buffer .= '"
';
                }
                $buffer .= $indent . '    >
';
                $buffer .= $indent . '        <span class="menu-action-text">
';
                $blockFunction = $context->findInBlock('favouritecontent');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    // 'userstate.favourited' section
                    $value = $context->findDot('userstate.favourited');
                    $buffer .= $this->section291f5af3a4572ec076c453f1d5aeec6a($context, $indent, $value);
                    // 'userstate.favourited' inverted section
                    $value = $context->findDot('userstate.favourited');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                    ';
                        // 'str' section
                        $value = $context->find('str');
                        $buffer .= $this->section25fd04774869002914ff7f1fa61234b9($context, $indent, $value);
                        $buffer .= '
';
                    }
                }
                $buffer .= $indent . '        </span>
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
