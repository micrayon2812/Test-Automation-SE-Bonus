<?php

class __Mustache_eb7737e1e01473acf794aa489e144975 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="ml-auto dropdown">
';
        $buffer .= $indent . '    <a href="#" class="';
        // 'settings.excludetext' inverted section
        $value = $context->findDot('settings.excludetext');
        if (empty($value)) {
            
            $buffer .= 'dropdown-toggle';
        }
        $buffer .= ' btn btn-link ';
        // 'settings.togglemoreicon' section
        $value = $context->findDot('settings.togglemoreicon');
        $buffer .= $this->sectionE8e03679aed55de44566d9c08754f13e($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        role="button"
';
        $buffer .= $indent . '        data-toggle="dropdown"
';
        $buffer .= $indent . '        aria-haspopup="true"
';
        $buffer .= $indent . '        tabindex="0"
';
        $buffer .= $indent . '        aria-controls="forum-action-menu-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-menu"
';
        $buffer .= $indent . '        aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4c6133ff98512e01b5be00eba924e9bb($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        aria-expanded="false">
';
        // 'settings.togglemoreicon' section
        $value = $context->findDot('settings.togglemoreicon');
        $buffer .= $this->section5b22b1c70290006bc445e8c76f31a9c9($context, $indent, $value);
        // 'settings.togglemoreicon' inverted section
        $value = $context->findDot('settings.togglemoreicon');
        if (empty($value)) {
            
            $buffer .= $indent . '            ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->section69527bcedf704ed2bb6a9a31baf770bf($context, $indent, $value);
            $buffer .= '
';
        }
        // 'settings.excludetext' inverted section
        $value = $context->findDot('settings.excludetext');
        if (empty($value)) {
            
            $buffer .= $indent . '            ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section2f3e1314eee82127f771d153b61eb44a($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '    <div class="dropdown-menu dropdown-menu-right"
';
        $buffer .= $indent . '         aria-labelledby="forum-action-menu-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-menu"
';
        $buffer .= $indent . '         data-rel="menu-content"
';
        $buffer .= $indent . '         role="menu"
';
        $buffer .= $indent . '         id="forum-action-menu-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-menu">
';
        // 'capabilities.favourite' section
        $value = $context->findDot('capabilities.favourite');
        $buffer .= $this->sectionD18e0dc484341da48681be80749a8b8f($context, $indent, $value);
        // 'capabilities.pin' section
        $value = $context->findDot('capabilities.pin');
        $buffer .= $this->section84eb6180a1ba4c494d2bfd36612c254a($context, $indent, $value);
        // 'capabilities.manage' section
        $value = $context->findDot('capabilities.manage');
        $buffer .= $this->sectionAd2dba5c399f731bae022a59ba2ea32e($context, $indent, $value);
        // 'settings.excludesubscription' inverted section
        $value = $context->findDot('settings.excludesubscription');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('forum/discussion_subscription_toggle')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
        }
        // 'unread' section
        $value = $context->find('unread');
        $buffer .= $this->sectionCdf05e951058d585b20d3f643a106c89($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionE8e03679aed55de44566d9c08754f13e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'btn-icon colour-inherit text-decoration-none d-flex align-items-center justify-content-center';
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
                
                $buffer .= 'btn-icon colour-inherit text-decoration-none d-flex align-items-center justify-content-center';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c6133ff98512e01b5be00eba924e9bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'togglediscussionmenu, mod_forum';
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
                
                $buffer .= 'togglediscussionmenu, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb5e6a9e6040a5725cde4b1c9f1d593f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/menu, core';
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
                
                $buffer .= ' i/menu, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b22b1c70290006bc445e8c76f31a9c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#pix}} i/menu, core{{/pix}}
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
                
                $buffer .= $indent . '            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionDb5e6a9e6040a5725cde4b1c9f1d593f($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69527bcedf704ed2bb6a9a31baf770bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/settings, core';
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
                
                $buffer .= ' i/settings, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f3e1314eee82127f771d153b61eb44a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' settings, mod_forum ';
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
                
                $buffer .= ' settings, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD18e0dc484341da48681be80749a8b8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> mod_forum/discussion_favourite_toggle}}
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
                
                if ($partial = $this->mustache->loadPartial('mod_forum/discussion_favourite_toggle')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84eb6180a1ba4c494d2bfd36612c254a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> mod_forum/discussion_pin_toggle}}
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
                
                if ($partial = $this->mustache->loadPartial('mod_forum/discussion_pin_toggle')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd2dba5c399f731bae022a59ba2ea32e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{^istimelocked}}
                {{> forum/discussion_lock_toggle }}
            {{/istimelocked}}
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
                
                // 'istimelocked' inverted section
                $value = $context->find('istimelocked');
                if (empty($value)) {
                    
                    if ($partial = $this->mustache->loadPartial('forum/discussion_lock_toggle')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCdf05e951058d585b20d3f643a106c89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> forum/mark_as_read }}
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
                
                if ($partial = $this->mustache->loadPartial('forum/mark_as_read')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
