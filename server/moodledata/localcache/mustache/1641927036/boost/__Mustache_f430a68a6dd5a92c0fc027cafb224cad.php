<?php

class __Mustache_f430a68a6dd5a92c0fc027cafb224cad extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'tools' section
        $value = $context->find('tools');
        $buffer .= $this->sectionF2a5ba47ed5c8347b0c7cdcc1e5673f9($context, $indent, $value);
        $buffer .= $indent . '<button class="icon-no-margin btn btn-secondary ';
        // 'viewlist' inverted section
        $value = $context->find('viewlist');
        if (empty($value)) {
            
            $buffer .= 'active';
        }
        $buffer .= ' ml-2"
';
        $buffer .= $indent . 'title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD393d30432f1ed8167e50ad70d93d722($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . 'data-action="viewgrid">
';
        $buffer .= $indent . '    ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionEb96bb01c095cdc60ac144eb04829f87($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</button>
';
        $buffer .= $indent . '<button class="icon-no-margin btn btn-secondary ';
        // 'viewlist' section
        $value = $context->find('viewlist');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . 'title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6ee07984ce4742385b2226eeb0de8436($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . 'data-action="viewlist">
';
        $buffer .= $indent . '    ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionBe0c318e7eafb3f7fb9a3b9b8acb904d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</button>
';

        return $buffer;
    }

    private function sectionC1155d98f4b77f1d6060c1a073c36fb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{>core_contentbank/bankcontent/toolbar_dropdown}}
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
                
                if ($partial = $this->mustache->loadPartial('core_contentbank/bankcontent/toolbar_dropdown')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section976b5e1de084a7964a6f2e27a3b85f2d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{{ icon }}} ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF2a5ba47ed5c8347b0c7cdcc1e5673f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#dropdown}}
        {{>core_contentbank/bankcontent/toolbar_dropdown}}
    {{/dropdown}}
    {{^dropdown}}
        <a href="{{ link }}" class="icon-no-margin btn btn-secondary" title="{{ name }}" data-action="{{ action }}">
            {{#pix}} {{{ icon }}} {{/pix}} {{{ name }}}
        </a>
    {{/dropdown}}
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
                
                // 'dropdown' section
                $value = $context->find('dropdown');
                $buffer .= $this->sectionC1155d98f4b77f1d6060c1a073c36fb6($context, $indent, $value);
                // 'dropdown' inverted section
                $value = $context->find('dropdown');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <a href="';
                    $value = $this->resolveValue($context->find('link'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" class="icon-no-margin btn btn-secondary" title="';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-action="';
                    $value = $this->resolveValue($context->find('action'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '            ';
                    // 'pix' section
                    $value = $context->find('pix');
                    $buffer .= $this->section976b5e1de084a7964a6f2e27a3b85f2d($context, $indent, $value);
                    $buffer .= ' ';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                    $buffer .= $indent . '        </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD393d30432f1ed8167e50ad70d93d722(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '  displayicons, contentbank  ';
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
                
                $buffer .= '  displayicons, contentbank  ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd10686049994681443b5a00306be4d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' displayicons, contentbank ';
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
                
                $buffer .= ' displayicons, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb96bb01c095cdc60ac144eb04829f87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'a/view_icon_active, core, {{#str}} displayicons, contentbank {{/str}} ';
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
                
                $buffer .= 'a/view_icon_active, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionCd10686049994681443b5a00306be4d5($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
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
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ee07984ce4742385b2226eeb0de8436(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' displaydetails, contentbank ';
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
                
                $buffer .= ' displaydetails, contentbank ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe0c318e7eafb3f7fb9a3b9b8acb904d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/viewdetails, core, {{#str}} displaydetails, contentbank {{/str}} ';
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
                
                $buffer .= 't/viewdetails, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6ee07984ce4742385b2226eeb0de8436($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
