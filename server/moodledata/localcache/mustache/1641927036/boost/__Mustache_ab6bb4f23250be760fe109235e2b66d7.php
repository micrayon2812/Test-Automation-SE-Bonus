<?php

class __Mustache_ab6bb4f23250be760fe109235e2b66d7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'capabilities.pin' section
        $value = $context->findDot('capabilities.pin');
        $buffer .= $this->section353a78320262f3274b4d486db2d0f33b($context, $indent, $value);

        return $buffer;
    }

    private function section463b2884cfb99a4861939d28dbc2476d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unpindiscussion, mod_forum';
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
                
                $buffer .= 'unpindiscussion, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc17a03e531dcf5fc034a76a3f2de356(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            data-targetstate="0"
            title="{{#str}}unpindiscussion, mod_forum{{/str}}"
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
                $buffer .= $this->section463b2884cfb99a4861939d28dbc2476d($context, $indent, $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe3e6eb9add57664cabefa8cbfb96b38(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pindiscussion, mod_forum';
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
                
                $buffer .= 'pindiscussion, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section594688c0a1c208f44eeac3574d1e48f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#str}}unpindiscussion, mod_forum{{/str}}
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
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section463b2884cfb99a4861939d28dbc2476d($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section353a78320262f3274b4d486db2d0f33b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a
        class="dropdown-item menu-action"
        role="menuitem"
        data-type="pin-toggle"
        data-action="toggle"
        data-discussionid="{{id}}"
        data-forumid="{{forumid}}"
        href="{{urls.pin}}"
        tabindex="-1"
        {{#pinned}}
            data-targetstate="0"
            title="{{#str}}unpindiscussion, mod_forum{{/str}}"
        {{/pinned}}
        {{^pinned}}
            data-targetstate="1"
            title="{{#str}}pindiscussion, mod_forum{{/str}}"
        {{/pinned}}
    >
        <span class="menu-action-text">
            {{#pinned}}
                {{#str}}unpindiscussion, mod_forum{{/str}}
            {{/pinned}}
            {{^pinned}}
                {{#str}}pindiscussion, mod_forum{{/str}}
            {{/pinned}}
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
                $buffer .= $indent . '        class="dropdown-item menu-action"
';
                $buffer .= $indent . '        role="menuitem"
';
                $buffer .= $indent . '        data-type="pin-toggle"
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
                $buffer .= $indent . '        href="';
                $value = $this->resolveValue($context->findDot('urls.pin'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '        tabindex="-1"
';
                // 'pinned' section
                $value = $context->find('pinned');
                $buffer .= $this->sectionCc17a03e531dcf5fc034a76a3f2de356($context, $indent, $value);
                // 'pinned' inverted section
                $value = $context->find('pinned');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            data-targetstate="1"
';
                    $buffer .= $indent . '            title="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionEe3e6eb9add57664cabefa8cbfb96b38($context, $indent, $value);
                    $buffer .= '"
';
                }
                $buffer .= $indent . '    >
';
                $buffer .= $indent . '        <span class="menu-action-text">
';
                // 'pinned' section
                $value = $context->find('pinned');
                $buffer .= $this->section594688c0a1c208f44eeac3574d1e48f5($context, $indent, $value);
                // 'pinned' inverted section
                $value = $context->find('pinned');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionEe3e6eb9add57664cabefa8cbfb96b38($context, $indent, $value);
                    $buffer .= '
';
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
