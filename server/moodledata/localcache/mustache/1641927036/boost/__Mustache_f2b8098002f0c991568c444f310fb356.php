<?php

class __Mustache_f2b8098002f0c991568c444f310fb356 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="discussion-list-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" ';
        $buffer .= 'data-contextid="';
        $value = $this->resolveValue($context->find('contextid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" ';
        $buffer .= 'data-cmid="';
        $value = $this->resolveValue($context->find('cmid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" ';
        $buffer .= 'data-name="';
        $value = $this->resolveValue($context->findDot('forum.name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" ';
        $buffer .= 'data-group="';
        $value = $this->resolveValue($context->findDot('forum.groupid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" ';
        $buffer .= 'data-grading-component="';
        $value = $this->resolveValue($context->find('gradingcomponent'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" ';
        $buffer .= 'data-grading-component-subtype="';
        $value = $this->resolveValue($context->find('gradingcomponentsubtype'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" ';
        $buffer .= 'data-gradable-itemtype="forum" ';
        // 'firstgradeduserid' section
        $value = $context->find('firstgradeduserid');
        $buffer .= $this->sectionAbf0c04727cbbb14934f18815b95c1ea($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '
';
        // 'notifications' section
        $value = $context->find('notifications');
        $buffer .= $this->sectionE5a98514cedc3c57d0f194c7edf6a47b($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('groupchangemenu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="py-3">
';
        // 'forum.capabilities.create' section
        $value = $context->findDot('forum.capabilities.create');
        $buffer .= $this->section01f1d6ec4782983525f708a8f392998b($context, $indent, $value);
        // 'forum.capabilities.create' inverted section
        $value = $context->findDot('forum.capabilities.create');
        if (empty($value)) {
            
            // 'forum.capabilities.selfenrol' section
            $value = $context->findDot('forum.capabilities.selfenrol');
            $buffer .= $this->section91793b872b02cbb979d146f53ce2f407($context, $indent, $value);
        }
        // 'forum.capabilities.grade' section
        $value = $context->findDot('forum.capabilities.grade');
        $buffer .= $this->section90868096681cb3fe8059a9290a83095a($context, $indent, $value);
        // 'forum.capabilities.grade' inverted section
        $value = $context->findDot('forum.capabilities.grade');
        if (empty($value)) {
            
            // 'forum.state.gradingenabled' section
            $value = $context->findDot('forum.state.gradingenabled');
            $buffer .= $this->sectionCd486e3e62e6f8f6cb286811b46dff6f($context, $indent, $value);
        }
        $buffer .= $indent . '    </div>
';
        // 'forum.capabilities.create' section
        $value = $context->findDot('forum.capabilities.create');
        $buffer .= $this->section5f59a0a0efec23608bcd6931206ff905($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'state.hasdiscussions' section
        $value = $context->findDot('state.hasdiscussions');
        $buffer .= $this->sectionF762024f4be0a3848f3384ecbbe6415d($context, $indent, $value);
        // 'state.hasdiscussions' inverted section
        $value = $context->findDot('state.hasdiscussions');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="forumnodiscuss">
';
            $blockFunction = $context->findInBlock('no_discussions_text');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            } else {
                $buffer .= $indent . '                (';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section59c4aea0943e493fb1621a8d24c8bd0f($context, $indent, $value);
                $buffer .= ')
';
            }
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section5f073c9308d156e8945ad42420be31cd($context, $indent, $value);

        return $buffer;
    }

    private function sectionAbf0c04727cbbb14934f18815b95c1ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-initialuserid="{{firstgradeduserid}}" ';
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
                
                $buffer .= 'data-initialuserid="';
                $value = $this->resolveValue($context->find('firstgradeduserid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5a98514cedc3c57d0f194c7edf6a47b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core/notification}}
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
                
                if ($partial = $this->mustache->loadPartial('core/notification')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60562f50222dfd2822e50e7da0116b1c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addanewdiscussion, forum';
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
                
                $buffer .= 'addanewdiscussion, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01f1d6ec4782983525f708a8f392998b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseAddForm">
                {{$discussion_create_text}}
                    {{#str}}addanewdiscussion, forum{{/str}}
                {{/discussion_create_text}}
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
                
                $buffer .= $indent . '            <a class="btn btn-primary" data-toggle="collapse" href="#collapseAddForm">
';
                $blockFunction = $context->findInBlock('discussion_create_text');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '                    ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section60562f50222dfd2822e50e7da0116b1c($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91793b872b02cbb979d146f53ce2f407(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="py-3">
                    <a class="btn btn-primary" href="{{forum.urls.create}}">
                        {{$discussion_create_text}}
                            {{#str}}addanewdiscussion, forum{{/str}}
                        {{/discussion_create_text}}
                    </a>
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
                
                $buffer .= $indent . '                <div class="py-3">
';
                $buffer .= $indent . '                    <a class="btn btn-primary" href="';
                $value = $this->resolveValue($context->findDot('forum.urls.create'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $blockFunction = $context->findInBlock('discussion_create_text');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '                            ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section60562f50222dfd2822e50e7da0116b1c($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36dde50b8b282933ed71ec3aab238de2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> mod_forum/grades/grade_button }}
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
                
                if ($partial = $this->mustache->loadPartial('mod_forum/grades/grade_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90868096681cb3fe8059a9290a83095a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#forum.state.gradingenabled}}
                {{> mod_forum/grades/grade_button }}
            {{/forum.state.gradingenabled}}
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
                
                // 'forum.state.gradingenabled' section
                $value = $context->findDot('forum.state.gradingenabled');
                $buffer .= $this->section36dde50b8b282933ed71ec3aab238de2($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd486e3e62e6f8f6cb286811b46dff6f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> mod_forum/grades/view_grade_button }}
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
                
                if ($partial = $this->mustache->loadPartial('mod_forum/grades/view_grade_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f59a0a0efec23608bcd6931206ff905(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="collapse mt-3 pb-3" id="collapseAddForm">
            {{{newdiscussionhtml}}}
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
                
                $buffer .= $indent . '        <div class="collapse mt-3 pb-3" id="collapseAddForm">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('newdiscussionhtml'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb7616eb082d38ffbff265dd116717ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showingcountoftotaldiscussions, mod_forum, {"count": "{{visiblediscussioncount}}", "total":"{{totaldiscussioncount}}"} ';
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
                
                $buffer .= ' showingcountoftotaldiscussions, mod_forum, {"count": "';
                $value = $this->resolveValue($context->find('visiblediscussioncount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '", "total":"';
                $value = $this->resolveValue($context->find('totaldiscussioncount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"} ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1a6182796dd1b976d215abc089edf1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'status';
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
                
                $buffer .= 'status';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd456da3679adb0f932ff4b4abdd2e44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbydiscussionasc, mod_forum';
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
                
                $buffer .= 'discussionlistsortbydiscussionasc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC1992336f71ab27e96dd60b73814a51c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussion, mod_forum';
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
                
                $buffer .= 'discussion, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61fd71a6b4af5bef754e61152bc3e899(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'desc, core';
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
                
                $buffer .= 'desc, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b40835e6575f136656670fa9ea6fa33(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/downlong, core, {{#str}}desc, core{{/str}}';
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
                
                $buffer .= 't/downlong, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section61fd71a6b4af5bef754e61152bc3e899($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBad9008d293eb3f49f406678d25d43c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortdiscussionasc}}}" aria-label="{{#str}}discussionlistsortbydiscussionasc, mod_forum{{/str}}">{{#str}}discussion, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortdiscussionasc'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDd456da3679adb0f932ff4b4abdd2e44($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionC1992336f71ab27e96dd60b73814a51c($context, $indent, $value);
                $buffer .= '</a> <span class="text-primary">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section0b40835e6575f136656670fa9ea6fa33($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf9629036b0703b6b8c3ca28b91e7251(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbydiscussiondesc, mod_forum';
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
                
                $buffer .= 'discussionlistsortbydiscussiondesc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA27af5852a97444d420eb51cb1ac1990(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'asc, core';
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
                
                $buffer .= 'asc, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c3327255392726ae79b991bf76b33a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/uplong, core, {{#str}}asc, core{{/str}}';
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
                
                $buffer .= 't/uplong, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA27af5852a97444d420eb51cb1ac1990($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAce5b65bd6166810895226f1d9e70d64(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortdiscussiondesc}}}" aria-label="{{#str}}discussionlistsortbydiscussiondesc, mod_forum{{/str}}">{{#str}}discussion, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortdiscussiondesc'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEf9629036b0703b6b8c3ca28b91e7251($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionC1992336f71ab27e96dd60b73814a51c($context, $indent, $value);
                $buffer .= '</a> <span class="text-primary">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section6c3327255392726ae79b991bf76b33a7($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63943239003118518d871c927fd1a85f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbygroupasc, mod_forum';
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
                
                $buffer .= 'discussionlistsortbygroupasc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88e57f90624c87c0f599df6e2b07da9c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'group';
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
                
                $buffer .= 'group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd4e1fb34e09ea60c88b92060a049b8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortgroupasc}}}" aria-label="{{#str}}discussionlistsortbygroupasc, mod_forum{{/str}}">{{#str}}group{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortgroupasc'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section63943239003118518d871c927fd1a85f($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section88e57f90624c87c0f599df6e2b07da9c($context, $indent, $value);
                $buffer .= '</a> <span class="text-primary">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section0b40835e6575f136656670fa9ea6fa33($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1ab27000e2206fdbc2ff398d0988de70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbygroupdesc, mod_forum';
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
                
                $buffer .= 'discussionlistsortbygroupdesc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section091389ea7e2eb96516bd80de103d631a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortgroupdesc}}}" aria-label="{{#str}}discussionlistsortbygroupdesc, mod_forum{{/str}}">{{#str}}group{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortgroupdesc'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section1ab27000e2206fdbc2ff398d0988de70($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section88e57f90624c87c0f599df6e2b07da9c($context, $indent, $value);
                $buffer .= '</a> <span class="text-primary">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section6c3327255392726ae79b991bf76b33a7($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ac56bd7e492ace9740008d0ec925901(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <th scope="col" class="group px-3">
                            {{#state.sortorder.isgroupdesc}}
                                <a href="{{{forum.urls.sortgroupasc}}}" aria-label="{{#str}}discussionlistsortbygroupasc, mod_forum{{/str}}">{{#str}}group{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.isgroupdesc}}
                            {{#state.sortorder.isgroupasc}}
                                <a href="{{{forum.urls.sortgroupdesc}}}" aria-label="{{#str}}discussionlistsortbygroupdesc, mod_forum{{/str}}">{{#str}}group{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.isgroupasc}}
                            {{^state.sortorder.isgroupdesc}}
                                {{^state.sortorder.isgroupasc}}
                                    <a href="{{{forum.urls.sortgroupdesc}}}" aria-label="{{#str}}discussionlistsortbygroupdesc, mod_forum{{/str}}">{{#str}}group{{/str}}</a>
                                {{/state.sortorder.isgroupasc}}
                            {{/state.sortorder.isgroupdesc}}
                        </th>
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
                
                $buffer .= $indent . '                        <th scope="col" class="group px-3">
';
                // 'state.sortorder.isgroupdesc' section
                $value = $context->findDot('state.sortorder.isgroupdesc');
                $buffer .= $this->sectionFd4e1fb34e09ea60c88b92060a049b8b($context, $indent, $value);
                // 'state.sortorder.isgroupasc' section
                $value = $context->findDot('state.sortorder.isgroupasc');
                $buffer .= $this->section091389ea7e2eb96516bd80de103d631a($context, $indent, $value);
                // 'state.sortorder.isgroupdesc' inverted section
                $value = $context->findDot('state.sortorder.isgroupdesc');
                if (empty($value)) {
                    
                    // 'state.sortorder.isgroupasc' inverted section
                    $value = $context->findDot('state.sortorder.isgroupasc');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                                    <a href="';
                        $value = $this->resolveValue($context->findDot('forum.urls.sortgroupdesc'), $context);
                        $buffer .= $value;
                        $buffer .= '" aria-label="';
                        // 'str' section
                        $value = $context->find('str');
                        $buffer .= $this->section1ab27000e2206fdbc2ff398d0988de70($context, $indent, $value);
                        $buffer .= '">';
                        // 'str' section
                        $value = $context->find('str');
                        $buffer .= $this->section88e57f90624c87c0f599df6e2b07da9c($context, $indent, $value);
                        $buffer .= '</a>
';
                    }
                }
                $buffer .= $indent . '                        </th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc4f12284a7dca05cf579bd1bad9a8ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbystarterasc, mod_forum';
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
                
                $buffer .= 'discussionlistsortbystarterasc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b223ddf50719647c9723401fba2694d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startedby, mod_forum';
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
                
                $buffer .= 'startedby, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9699a9322a6f784b0b9f9e5f6deb953(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortstarterasc}}}" aria-label="{{#str}}discussionlistsortbystarterasc, mod_forum{{/str}}">{{#str}}startedby, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortstarterasc'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDc4f12284a7dca05cf579bd1bad9a8ce($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0b223ddf50719647c9723401fba2694d($context, $indent, $value);
                $buffer .= '</a> <span class="text-primary">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section0b40835e6575f136656670fa9ea6fa33($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC00eea43088295dd7c1188b2e55e141a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbystarterdesc, mod_forum';
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
                
                $buffer .= 'discussionlistsortbystarterdesc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d370229eb860e5e770278c070587664(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortstarterdesc}}}" aria-label="{{#str}}discussionlistsortbystarterdesc, mod_forum{{/str}}">{{#str}}startedby, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortstarterdesc'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionC00eea43088295dd7c1188b2e55e141a($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0b223ddf50719647c9723401fba2694d($context, $indent, $value);
                $buffer .= '</a> <span class="text-primary">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section6c3327255392726ae79b991bf76b33a7($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7533e01c6ea8dc878fabfc9fc56be8f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbylastpostasc, mod_forum';
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
                
                $buffer .= 'discussionlistsortbylastpostasc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc4bf659abc5d7e4d1fa879fd68d56c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'lastpost, mod_forum';
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
                
                $buffer .= 'lastpost, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b74d0d3dddae194ae813b11c040df0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortlastpostasc}}}" aria-label="{{#str}}discussionlistsortbylastpostasc, mod_forum{{/str}}">{{#str}}lastpost, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortlastpostasc'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7533e01c6ea8dc878fabfc9fc56be8f7($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBc4bf659abc5d7e4d1fa879fd68d56c8($context, $indent, $value);
                $buffer .= '</a> <span class="text-primary">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section0b40835e6575f136656670fa9ea6fa33($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa917cd08c45399601e65090de917ad3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbylastpostdesc, mod_forum';
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
                
                $buffer .= 'discussionlistsortbylastpostdesc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39d65f4cf2ca71bd20c9152bea80692c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortlastpostdesc}}}" aria-label="{{#str}}discussionlistsortbylastpostdesc, mod_forum{{/str}}">{{#str}}lastpost, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortlastpostdesc'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEa917cd08c45399601e65090de917ad3($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBc4bf659abc5d7e4d1fa879fd68d56c8($context, $indent, $value);
                $buffer .= '</a> <span class="text-primary">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section6c3327255392726ae79b991bf76b33a7($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4f5cd2412b81cf4971a3c90bc81fb6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbyrepliesasc, mod_forum';
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
                
                $buffer .= 'discussionlistsortbyrepliesasc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD98678024f3969cfad681333304399ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'replies, mod_forum';
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
                
                $buffer .= 'replies, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBb1c90dee25cf10f74f2982d70c5c98b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a href="{{{forum.urls.sortrepliesasc}}}" aria-label="{{#str}}discussionlistsortbyrepliesasc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
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
                
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortrepliesasc'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA4f5cd2412b81cf4971a3c90bc81fb6e($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD98678024f3969cfad681333304399ae($context, $indent, $value);
                $buffer .= '</a> <span class="text-primary">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section0b40835e6575f136656670fa9ea6fa33($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section89bd64d1cf116028e547fc6701c7eaaa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbyrepliesdesc, mod_forum';
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
                
                $buffer .= 'discussionlistsortbyrepliesdesc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e3312242a2ab7e49833dfd85a734a3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a href="{{{forum.urls.sortrepliesdesc}}}" aria-label="{{#str}}discussionlistsortbyrepliesdesc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
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
                
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortrepliesdesc'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section89bd64d1cf116028e547fc6701c7eaaa($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD98678024f3969cfad681333304399ae($context, $indent, $value);
                $buffer .= '</a> <span class="text-primary">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section6c3327255392726ae79b991bf76b33a7($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDbb870dc026f5469d13ab846cde860af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'markallread, mod_forum';
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
                
                $buffer .= 'markallread, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9d125a5afcc3c71288fe20008de1faa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/markasread, core, {{#str}}markallread, mod_forum{{/str}}';
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
                
                $buffer .= 't/markasread, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDbb870dc026f5469d13ab846cde860af($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section434ee357aa5c97e851934a595dcf7a7a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a href="{{{forum.urls.markasread}}}">{{#pix}}t/markasread, core, {{#str}}markallread, mod_forum{{/str}}{{/pix}}</a>
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
                
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.markasread'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionC9d125a5afcc3c71288fe20008de1faa($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section023ff56674ddd39239d5a6a87c224365(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <th scope="col" class="text-center px-2">
                                {{#state.sortorder.isrepliesdesc}}
                                    <a href="{{{forum.urls.sortrepliesasc}}}" aria-label="{{#str}}discussionlistsortbyrepliesasc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                                {{/state.sortorder.isrepliesdesc}}
                                {{#state.sortorder.isrepliesasc}}
                                    <a href="{{{forum.urls.sortrepliesdesc}}}" aria-label="{{#str}}discussionlistsortbyrepliesdesc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                                {{/state.sortorder.isrepliesasc}}
                                {{^state.sortorder.isrepliesdesc}}
                                    {{^state.sortorder.isrepliesasc}}
                                        <a href="{{{forum.urls.sortrepliesdesc}}}" aria-label="{{#str}}discussionlistsortbyrepliesdesc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a>
                                    {{/state.sortorder.isrepliesasc}}
                                {{/state.sortorder.isrepliesdesc}}
                                {{#forum.userstate.tracked}}
                                    <a href="{{{forum.urls.markasread}}}">{{#pix}}t/markasread, core, {{#str}}markallread, mod_forum{{/str}}{{/pix}}</a>
                                {{/forum.userstate.tracked}}
                            </th>
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
                
                $buffer .= $indent . '                            <th scope="col" class="text-center px-2">
';
                // 'state.sortorder.isrepliesdesc' section
                $value = $context->findDot('state.sortorder.isrepliesdesc');
                $buffer .= $this->sectionBb1c90dee25cf10f74f2982d70c5c98b($context, $indent, $value);
                // 'state.sortorder.isrepliesasc' section
                $value = $context->findDot('state.sortorder.isrepliesasc');
                $buffer .= $this->section1e3312242a2ab7e49833dfd85a734a3a($context, $indent, $value);
                // 'state.sortorder.isrepliesdesc' inverted section
                $value = $context->findDot('state.sortorder.isrepliesdesc');
                if (empty($value)) {
                    
                    // 'state.sortorder.isrepliesasc' inverted section
                    $value = $context->findDot('state.sortorder.isrepliesasc');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                                        <a href="';
                        $value = $this->resolveValue($context->findDot('forum.urls.sortrepliesdesc'), $context);
                        $buffer .= $value;
                        $buffer .= '" aria-label="';
                        // 'str' section
                        $value = $context->find('str');
                        $buffer .= $this->section89bd64d1cf116028e547fc6701c7eaaa($context, $indent, $value);
                        $buffer .= '">';
                        // 'str' section
                        $value = $context->find('str');
                        $buffer .= $this->sectionD98678024f3969cfad681333304399ae($context, $indent, $value);
                        $buffer .= '</a>
';
                    }
                }
                // 'forum.userstate.tracked' section
                $value = $context->findDot('forum.userstate.tracked');
                $buffer .= $this->section434ee357aa5c97e851934a595dcf7a7a($context, $indent, $value);
                $buffer .= $indent . '                            </th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4182c318dda7dd3af2a7fadca6612c7e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notsubscribed, mod_forum ';
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
                
                $buffer .= ' notsubscribed, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40a468369b699f550de11d88b2b0d5c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <th scope="col" class="text-center px-2">{{#str}} notsubscribed, mod_forum {{/str}}</th>
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
                
                $buffer .= $indent . '                            <th scope="col" class="text-center px-2">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4182c318dda7dd3af2a7fadca6612c7e($context, $indent, $value);
                $buffer .= '</th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ad2fdcc9b858451e82e60edfcdcf48d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'actions';
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
                
                $buffer .= 'actions';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06a429e123576badc8e52295604a303d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pinned';
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
                
                $buffer .= ' pinned';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1a9d8cd1e354f9bf974f188e724426f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' favourited';
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
                
                $buffer .= ' favourited';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD311956d9afbf7e7dbf59246fb7bcedc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' subscribed';
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
                
                $buffer .= ' subscribed';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section924a19be55d41b812cbdef471b525004(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hasunread';
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
                
                $buffer .= ' hasunread';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cdfa36eda92d4a8cafa090a19cdb853(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^visible}} dimmed_text{{/visible}}';
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
                
                // 'visible' inverted section
                $value = $context->find('visible');
                if (empty($value)) {
                    
                    $buffer .= ' dimmed_text';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9852e56b2e2e71abe5d2768426c44af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#istimed}}{{^visible}} dimmed_text{{/visible}}{{/istimed}}';
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
                
                // 'istimed' section
                $value = $context->find('istimed');
                $buffer .= $this->section3cdfa36eda92d4a8cafa090a19cdb853($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA80f28843b433fe65ddf4e33b6495a3d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionpinned, mod_forum';
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
                
                $buffer .= 'discussionpinned, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section94ac079e2e1fe2969312dd51a9e1d942(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/pinned, mod_forum, {{#str}}discussionpinned, mod_forum{{/str}}';
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
                
                $buffer .= 'i/pinned, mod_forum, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA80f28843b433fe65ddf4e33b6495a3d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDed8643fe770479fc2009169ad7d65dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{#pix}}i/pinned, mod_forum, {{#str}}discussionpinned, mod_forum{{/str}}{{/pix}}
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
                
                $buffer .= $indent . '                                    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section94ac079e2e1fe2969312dd51a9e1d942($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC96152b3d6149033c0798e80794e8731(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        {{> mod_forum/forum_discussion_favourite_toggle}}
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
                
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_discussion_favourite_toggle')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA9c739fd0fabc4eb11ea586804b0ba1f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '100, {{{discussion.name}}}';
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
                
                $buffer .= '100, ';
                $value = $this->resolveValue($context->findDot('discussion.name'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section803e155e7b88f0a1bd6fbad5707cfc46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'locked, forum';
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
                
                $buffer .= 'locked, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a3208047bf19127da6925ca57b0d13d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> mod_forum/discussion_times}}';
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
                
                if ($partial = $this->mustache->loadPartial('mod_forum/discussion_times')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section25105f750e7ba16d300735e691a45df0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#discussion.times}}{{> mod_forum/discussion_times}}{{/discussion.times}}';
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
                
                // 'discussion.times' section
                $value = $context->findDot('discussion.times');
                $buffer .= $this->section0a3208047bf19127da6925ca57b0d13d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section68598a45d96826ba976c3d71aba3765b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#discussion.timed}}{{#discussion.times}}{{> mod_forum/discussion_times}}{{/discussion.times}}{{/discussion.timed}}';
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
                
                // 'discussion.timed' section
                $value = $context->findDot('discussion.timed');
                $buffer .= $this->section25105f750e7ba16d300735e691a45df0($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe015981e4b070a516ba7e705a1a3eef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'timeddiscussion, forum';
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
                
                $buffer .= 'timeddiscussion, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3173849eac8c3531410d00d6401c4b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'timed, forum';
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
                
                $buffer .= 'timed, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC3cddc07a38622609ff78fe80f73f279(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <span>
                                             <button class="btn badge badge-primary rounded border-0" data-region="timed-label"
                                                data-toggle="popover" data-container="body" data-placement="right" data-html="true"
                                                data-content={{#quote}}{{#discussion.timed}}{{#discussion.times}}{{> mod_forum/discussion_times}}{{/discussion.times}}{{/discussion.timed}}{{/quote}}
                                                data-trigger="click" aria-label="{{#str}}timeddiscussion, forum{{/str}}" title="{{#str}}timeddiscussion, forum{{/str}}">
                                                 {{#str}}timed, forum{{/str}}
                                             </button>
                                        </span>
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
                
                $buffer .= $indent . '                                        <span>
';
                $buffer .= $indent . '                                             <button class="btn badge badge-primary rounded border-0" data-region="timed-label"
';
                $buffer .= $indent . '                                                data-toggle="popover" data-container="body" data-placement="right" data-html="true"
';
                $buffer .= $indent . '                                                data-content=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section68598a45d96826ba976c3d71aba3765b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                data-trigger="click" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionFe015981e4b070a516ba7e705a1a3eef($context, $indent, $value);
                $buffer .= '" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionFe015981e4b070a516ba7e705a1a3eef($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                 ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB3173849eac8c3531410d00d6401c4b0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                             </button>
';
                $buffer .= $indent . '                                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE103d4001a9c5c8aed5c9292425b5842(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pictureof, core, {{name}} ';
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
                
                $buffer .= ' pictureof, core, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9676b028b46e3df83a3055c6a32599ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' memberofgroup, group, {{name}}';
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
                
                $buffer .= ' memberofgroup, group, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section633360e8785a78973fd7c4412b35ca1f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '30, {{name}}';
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
                
                $buffer .= '30, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04bb794337e324ccf3d48175b8266ad6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <a href="{{{urls.userlist}}}" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'
                                               title=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                                {{#shortentext}}30, {{name}}{{/shortentext}}
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
                
                $buffer .= $indent . '                                            <a href="';
                $value = $this->resolveValue($context->findDot('urls.userlist'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label=\'';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9676b028b46e3df83a3055c6a32599ed($context, $indent, $value);
                $buffer .= '\'
';
                $buffer .= $indent . '                                               title=\'';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9676b028b46e3df83a3055c6a32599ed($context, $indent, $value);
                $buffer .= '\'>
';
                $buffer .= $indent . '                                                ';
                // 'shortentext' section
                $value = $context->find('shortentext');
                $buffer .= $this->section633360e8785a78973fd7c4412b35ca1f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section987cf162d99b5550d0b1ba5701c99774(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <img alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                             class="border rounded h-auto rounded-circle grouppicture"
                                             src="{{{urls.picture}}}"
                                             title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                        {{#urls.userlist}}
                                            <a href="{{{urls.userlist}}}" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'
                                               title=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                                {{#shortentext}}30, {{name}}{{/shortentext}}
                                            </a>
                                        {{/urls.userlist}}
                                        {{^urls.userlist}}
                                            <span>{{name}}</span>
                                        {{/urls.userlist}}
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
                
                $buffer .= $indent . '                                        <img alt="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                             class="border rounded h-auto rounded-circle grouppicture"
';
                $buffer .= $indent . '                                             src="';
                $value = $this->resolveValue($context->findDot('urls.picture'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '                                             title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '">
';
                // 'urls.userlist' section
                $value = $context->findDot('urls.userlist');
                $buffer .= $this->section04bb794337e324ccf3d48175b8266ad6($context, $indent, $value);
                // 'urls.userlist' inverted section
                $value = $context->findDot('urls.userlist');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                            <span>';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</span>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d9baa8c14974375f73b9a02b818d628(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <td class="group align-middle fit-content limit-width px-3">
                                    {{#discussion.group}}
                                        <img alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                             class="border rounded h-auto rounded-circle grouppicture"
                                             src="{{{urls.picture}}}"
                                             title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                        {{#urls.userlist}}
                                            <a href="{{{urls.userlist}}}" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'
                                               title=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                                {{#shortentext}}30, {{name}}{{/shortentext}}
                                            </a>
                                        {{/urls.userlist}}
                                        {{^urls.userlist}}
                                            <span>{{name}}</span>
                                        {{/urls.userlist}}
                                    {{/discussion.group}}
                                </td>
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
                
                $buffer .= $indent . '                                <td class="group align-middle fit-content limit-width px-3">
';
                // 'discussion.group' section
                $value = $context->findDot('discussion.group');
                $buffer .= $this->section987cf162d99b5550d0b1ba5701c99774($context, $indent, $value);
                $buffer .= $indent . '                                </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section702351094cafd0f597cee4369a69f5c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pictureof, moodle, {{fullname}}';
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
                
                $buffer .= 'pictureof, moodle, ';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3a6e53f90c6dd41d1acb0c171f9b04ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'strftimedatemonthabbr, langconfig';
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
                
                $buffer .= 'strftimedatemonthabbr, langconfig';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4132191a96ea53564b7c4bfa035c6b12(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="d-flex">
                                        <div class="align-middle p-0">
                                            <img class="rounded-circle userpicture" src="{{urls.profileimage}}"
                                                 alt="{{#str}}pictureof, moodle, {{fullname}}{{/str}}"
                                                 title="{{#str}}pictureof, moodle, {{fullname}}{{/str}}" >
                                        </div>
                                        <div class="author-info align-middle">
                                            <div class="mb-1 line-height-3 text-truncate">{{fullname}}</div>
                                            <div class="line-height-3">
                                                {{< core/time_element }}
                                                    {{$elementid}}created-{{discussion.id}}{{/elementid}}
                                                    {{$timestampval}}{{discussion.times.created}}{{/timestampval}}
                                                    {{$userdateformatval}}{{#str}}strftimedatemonthabbr, langconfig{{/str}}{{/userdateformatval}}
                                                {{/core/time_element}}
                                            </div>
                                        </div>
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
                
                $buffer .= $indent . '                                    <div class="d-flex">
';
                $buffer .= $indent . '                                        <div class="align-middle p-0">
';
                $buffer .= $indent . '                                            <img class="rounded-circle userpicture" src="';
                $value = $this->resolveValue($context->findDot('urls.profileimage'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                 alt="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section702351094cafd0f597cee4369a69f5c3($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                 title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section702351094cafd0f597cee4369a69f5c3($context, $indent, $value);
                $buffer .= '" >
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="author-info align-middle">
';
                $buffer .= $indent . '                                            <div class="mb-1 line-height-3 text-truncate">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                            <div class="line-height-3">
';
                $buffer .= $indent . '                                                ';
                if ($parent = $this->mustache->loadPartial('core/time_element')) {
                    $context->pushBlockContext(array(
                        'elementid' => array($this, 'blockE1e9e778bab467b9e0337eccd0a7c89c'),
                        'timestampval' => array($this, 'block688783e55412ca72f488fab25d35f8a8'),
                        'userdateformatval' => array($this, 'blockA0daf0b849ef0aadd12e3dcd7865f25b'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $buffer .= '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39978570f671e2d5d699604316408597(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'strftimerecentfull';
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
                
                $buffer .= 'strftimerecentfull';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA897183e8e2e03813e14c91eac7cca04(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{discussion.times.modified}},{{#str}}strftimerecentfull{{/str}}';
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
                
                $value = $this->resolveValue($context->findDot('discussion.times.modified'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section39978570f671e2d5d699604316408597($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1da1c20b62e1168eda4e8cc6bd7a0ee6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <a href="{{{discussion.urls.viewlatest}}}" title="{{#userdate}}{{discussion.times.modified}},{{#str}}strftimerecentfull{{/str}}{{/userdate}}">
                                                        {{< core/time_element }}
                                                            {{$elementid}}modified-{{discussion.id}}{{/elementid}}
                                                            {{$timestampval}}{{discussion.times.modified}}{{/timestampval}}
                                                            {{$userdateformatval}}{{#str}}strftimedatemonthabbr, langconfig{{/str}}{{/userdateformatval}}
                                                        {{/ core/time_element }}
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
                
                $buffer .= $indent . '                                                    <a href="';
                $value = $this->resolveValue($context->findDot('discussion.urls.viewlatest'), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->sectionA897183e8e2e03813e14c91eac7cca04($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                        ';
                if ($parent = $this->mustache->loadPartial('core/time_element')) {
                    $context->pushBlockContext(array(
                        'elementid' => array($this, 'block00c73a8ee8b83206d8db69122fc7d7b1'),
                        'timestampval' => array($this, 'block1255ed35768fc1e80bf6445a3cdd5909'),
                        'userdateformatval' => array($this, 'blockA0daf0b849ef0aadd12e3dcd7865f25b'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $buffer .= '                                                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA44fd6791449290a999827936c9bffa4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="d-flex">
                                        <div class="align-middle p-0">
                                            <img class="rounded-circle userpicture" src="{{urls.profileimage}}"
                                                 alt="{{#str}}pictureof, moodle, {{fullname}}{{/str}}"
                                                 title="{{#str}}pictureof, moodle, {{fullname}}{{/str}}" >
                                        </div>
                                        <div class="author-info align-middle">
                                            <div class="mb-1 line-height-3 text-truncate">{{fullname}}</div>
                                            <div class="line-height-3">
                                                {{#latestpostid}}
                                                    <a href="{{{discussion.urls.viewlatest}}}" title="{{#userdate}}{{discussion.times.modified}},{{#str}}strftimerecentfull{{/str}}{{/userdate}}">
                                                        {{< core/time_element }}
                                                            {{$elementid}}modified-{{discussion.id}}{{/elementid}}
                                                            {{$timestampval}}{{discussion.times.modified}}{{/timestampval}}
                                                            {{$userdateformatval}}{{#str}}strftimedatemonthabbr, langconfig{{/str}}{{/userdateformatval}}
                                                        {{/ core/time_element }}
                                                    </a>
                                                {{/latestpostid}}
                                            </div>
                                        </div>
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
                
                $buffer .= $indent . '                                    <div class="d-flex">
';
                $buffer .= $indent . '                                        <div class="align-middle p-0">
';
                $buffer .= $indent . '                                            <img class="rounded-circle userpicture" src="';
                $value = $this->resolveValue($context->findDot('urls.profileimage'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                 alt="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section702351094cafd0f597cee4369a69f5c3($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                 title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section702351094cafd0f597cee4369a69f5c3($context, $indent, $value);
                $buffer .= '" >
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="author-info align-middle">
';
                $buffer .= $indent . '                                            <div class="mb-1 line-height-3 text-truncate">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                            <div class="line-height-3">
';
                // 'latestpostid' section
                $value = $context->find('latestpostid');
                $buffer .= $this->section1da1c20b62e1168eda4e8cc6bd7a0ee6($context, $indent, $value);
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section58ece152187df55c4d1c0bd2582888e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unreadpostsnumber, mod_forum, {{unread}}';
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
                
                $buffer .= 'unreadpostsnumber, mod_forum, ';
                $value = $this->resolveValue($context->find('unread'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ab347482d844ccaafd00dd32ce0d048(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        {{! TODO Rewrite as AJAX}}
                                            <span class="lead">
                                                <a href="{{{discussion.urls.viewfirstunread}}}" class="badge badge-primary rounded-pill font-weight-normal"
                                                   title="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}" aria-label="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}">
                                                    {{unread}}
                                                </a>
                                            </span>
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
                
                $buffer .= $indent . '                                            <span class="lead">
';
                $buffer .= $indent . '                                                <a href="';
                $value = $this->resolveValue($context->findDot('discussion.urls.viewfirstunread'), $context);
                $buffer .= $value;
                $buffer .= '" class="badge badge-primary rounded-pill font-weight-normal"
';
                $buffer .= $indent . '                                                   title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section58ece152187df55c4d1c0bd2582888e1($context, $indent, $value);
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section58ece152187df55c4d1c0bd2582888e1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                    ';
                $value = $this->resolveValue($context->find('unread'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $buffer .= $indent . '                                            </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC13b1ba7d6e7ba07c6ce3e0851d74679(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        {{#unread}}
                                        {{! TODO Rewrite as AJAX}}
                                            <span class="lead">
                                                <a href="{{{discussion.urls.viewfirstunread}}}" class="badge badge-primary rounded-pill font-weight-normal"
                                                   title="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}" aria-label="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}">
                                                    {{unread}}
                                                </a>
                                            </span>
                                        {{/unread}}
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
                
                // 'unread' section
                $value = $context->find('unread');
                $buffer .= $this->section6ab347482d844ccaafd00dd32ce0d048($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section136f45f5ecfddcbd0dd4606908001de7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <td class="p-0 text-center align-middle fit-content px-2">
                                    <span>{{replies}}</span>
                                    {{#forum.userstate.tracked}}
                                        {{#unread}}
                                        {{! TODO Rewrite as AJAX}}
                                            <span class="lead">
                                                <a href="{{{discussion.urls.viewfirstunread}}}" class="badge badge-primary rounded-pill font-weight-normal"
                                                   title="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}" aria-label="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}">
                                                    {{unread}}
                                                </a>
                                            </span>
                                        {{/unread}}
                                    {{/forum.userstate.tracked}}
                                </td>
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
                
                $buffer .= $indent . '                                <td class="p-0 text-center align-middle fit-content px-2">
';
                $buffer .= $indent . '                                    <span>';
                $value = $this->resolveValue($context->find('replies'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                // 'forum.userstate.tracked' section
                $value = $context->findDot('forum.userstate.tracked');
                $buffer .= $this->sectionC13b1ba7d6e7ba07c6ce3e0851d74679($context, $indent, $value);
                $buffer .= $indent . '                                </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2244061dd4a6b524e19d9b34d4d5dbe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-targetstate="0" checked';
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
                
                $buffer .= 'data-targetstate="0" checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA1bcfef79bd7dfcb6c00e42a90570271(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unsubscribediscussion, forum';
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
                
                $buffer .= 'unsubscribediscussion, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8c9ecfa15e97e1fc2ef0bea20332a9e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                        {{#str}}unsubscribediscussion, forum{{/str}}
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
                
                $buffer .= $indent . '                                                        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA1bcfef79bd7dfcb6c00e42a90570271($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section53e320971a6242e13cf0552e5154a747(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'subscribediscussion, forum';
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
                
                $buffer .= 'subscribediscussion, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78195fff0c691403ea7c86a5c8c84758(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div class="d-inline custom-control custom-switch mb-1">
                                            <input
                                                type="checkbox"
                                                class="custom-control-input"
                                                id="subscription-toggle-{{id}}"
                                                data-type="subscription-toggle"
                                                data-action="toggle"
                                                data-discussionid="{{id}}"
                                                data-forumid="{{forumid}}"
                                                {{#userstate.subscribed}}data-targetstate="0" checked{{/userstate.subscribed}}
                                                {{^userstate.subscribed}}data-targetstate="1"{{/userstate.subscribed}}>
                                            <label class="custom-control-label" for="subscription-toggle-{{id}}">
                                                <span class="sr-only">
                                                    {{#userstate.subscribed}}
                                                        {{#str}}unsubscribediscussion, forum{{/str}}
                                                    {{/userstate.subscribed}}
                                                    {{^userstate.subscribed}}
                                                        {{#str}}subscribediscussion, forum{{/str}}
                                                    {{/userstate.subscribed}}
                                                </span>
                                            </label>
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
                
                $buffer .= $indent . '                                        <div class="d-inline custom-control custom-switch mb-1">
';
                $buffer .= $indent . '                                            <input
';
                $buffer .= $indent . '                                                type="checkbox"
';
                $buffer .= $indent . '                                                class="custom-control-input"
';
                $buffer .= $indent . '                                                id="subscription-toggle-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                data-type="subscription-toggle"
';
                $buffer .= $indent . '                                                data-action="toggle"
';
                $buffer .= $indent . '                                                data-discussionid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                data-forumid="';
                $value = $this->resolveValue($context->find('forumid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                ';
                // 'userstate.subscribed' section
                $value = $context->findDot('userstate.subscribed');
                $buffer .= $this->sectionC2244061dd4a6b524e19d9b34d4d5dbe($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                ';
                // 'userstate.subscribed' inverted section
                $value = $context->findDot('userstate.subscribed');
                if (empty($value)) {
                    
                    $buffer .= 'data-targetstate="1"';
                }
                $buffer .= '>
';
                $buffer .= $indent . '                                            <label class="custom-control-label" for="subscription-toggle-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                <span class="sr-only">
';
                // 'userstate.subscribed' section
                $value = $context->findDot('userstate.subscribed');
                $buffer .= $this->sectionD8c9ecfa15e97e1fc2ef0bea20332a9e($context, $indent, $value);
                // 'userstate.subscribed' inverted section
                $value = $context->findDot('userstate.subscribed');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                        ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section53e320971a6242e13cf0552e5154a747($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '                                                </span>
';
                $buffer .= $indent . '                                            </label>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section225d09ef6a113bb76c7f291809d3474e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <td class="text-center align-middle fit-content px-2">
                                    {{#discussion}}
                                        <div class="d-inline custom-control custom-switch mb-1">
                                            <input
                                                type="checkbox"
                                                class="custom-control-input"
                                                id="subscription-toggle-{{id}}"
                                                data-type="subscription-toggle"
                                                data-action="toggle"
                                                data-discussionid="{{id}}"
                                                data-forumid="{{forumid}}"
                                                {{#userstate.subscribed}}data-targetstate="0" checked{{/userstate.subscribed}}
                                                {{^userstate.subscribed}}data-targetstate="1"{{/userstate.subscribed}}>
                                            <label class="custom-control-label" for="subscription-toggle-{{id}}">
                                                <span class="sr-only">
                                                    {{#userstate.subscribed}}
                                                        {{#str}}unsubscribediscussion, forum{{/str}}
                                                    {{/userstate.subscribed}}
                                                    {{^userstate.subscribed}}
                                                        {{#str}}subscribediscussion, forum{{/str}}
                                                    {{/userstate.subscribed}}
                                                </span>
                                            </label>
                                        </div>
                                    {{/discussion}}
                                </td>
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
                
                $buffer .= $indent . '                                <td class="text-center align-middle fit-content px-2">
';
                // 'discussion' section
                $value = $context->find('discussion');
                $buffer .= $this->section78195fff0c691403ea7c86a5c8c84758($context, $indent, $value);
                $buffer .= $indent . '                                </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF2746f99ceaab2873daa195541a1fe3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div data-container=\'discussion-tools\'>
                                                {{> mod_forum/forum_action_menu}}
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
                
                $buffer .= $indent . '                                            <div data-container=\'discussion-tools\'>
';
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                ');
                }
                $buffer .= $indent . '                                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c0a5f5e4278725ea50a0a54f54881c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="d-flex flex-wrap justify-content-end icon-no-margin">
                                        {{#hasanyactions}}
                                            <div data-container=\'discussion-tools\'>
                                                {{> mod_forum/forum_action_menu}}
                                            </div>
                                        {{/hasanyactions}}
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
                
                $buffer .= $indent . '                                    <div class="d-flex flex-wrap justify-content-end icon-no-margin">
';
                // 'hasanyactions' section
                $value = $context->find('hasanyactions');
                $buffer .= $this->sectionF2746f99ceaab2873daa195541a1fe3a($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section64679d3eb07b6e6ae915eddabf82c2da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{! The discussion class is only required for behat tests to identify the row. }}
                        <tr class="discussion{{!
                                }}{{#discussion.pinned}} pinned{{/discussion.pinned}}{{!
                                }}{{#discussion.userstate.favourited}} favourited{{/discussion.userstate.favourited}}{{!
                                }}{{#discussion.userstate.subscribed}} subscribed{{/discussion.userstate.subscribed}}{{!
                                }}{{#unread}} hasunread{{/unread}}{{!
                                }}{{#discussion.timed}}{{#istimed}}{{^visible}} dimmed_text{{/visible}}{{/istimed}}{{/discussion.timed}}"
                            data-region="discussion-list-item"
                            data-discussionid="{{id}}"
                            data-forumid="{{forumid}}">
                            <td class="p-0 text-center align-middle icon-no-margin" style="width: 1px;">
                                {{#discussion.pinned}}
                                    {{#pix}}i/pinned, mod_forum, {{#str}}discussionpinned, mod_forum{{/str}}{{/pix}}
                                {{/discussion.pinned}}
                                {{^discussion.pinned}}
                                    {{#discussion}}
                                        {{> mod_forum/forum_discussion_favourite_toggle}}
                                    {{/discussion}}
                                {{/discussion.pinned}}
                            </td>
                            <th scope="row" class="topic p-0 align-middle">
                                <div class="p-3 pl-0">
                                    <a class="w-100 h-100 d-block" href="{{discussion.urls.view}}" title="{{discussion.name}}" aria-label="{{discussion.name}}">
                                        {{#shortentext}}100, {{{discussion.name}}}{{/shortentext}}
                                    </a>
                                    <div>
                                        <span class="badge badge-danger rounded" data-region="locked-label" {{^discussion.locked}}hidden{{/discussion.locked}}>
                                            {{#str}}locked, forum{{/str}}
                                        </span>
                                        {{#discussion.timed.istimed}}
                                        <span>
                                             <button class="btn badge badge-primary rounded border-0" data-region="timed-label"
                                                data-toggle="popover" data-container="body" data-placement="right" data-html="true"
                                                data-content={{#quote}}{{#discussion.timed}}{{#discussion.times}}{{> mod_forum/discussion_times}}{{/discussion.times}}{{/discussion.timed}}{{/quote}}
                                                data-trigger="click" aria-label="{{#str}}timeddiscussion, forum{{/str}}" title="{{#str}}timeddiscussion, forum{{/str}}">
                                                 {{#str}}timed, forum{{/str}}
                                             </button>
                                        </span>
                                        {{/discussion.timed.istimed}}
                                    </div>
                                </div>
                            </th>
                            {{#forum.state.groupmode}}
                                <td class="group align-middle fit-content limit-width px-3">
                                    {{#discussion.group}}
                                        <img alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                             class="border rounded h-auto rounded-circle grouppicture"
                                             src="{{{urls.picture}}}"
                                             title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                        {{#urls.userlist}}
                                            <a href="{{{urls.userlist}}}" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'
                                               title=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                                {{#shortentext}}30, {{name}}{{/shortentext}}
                                            </a>
                                        {{/urls.userlist}}
                                        {{^urls.userlist}}
                                            <span>{{name}}</span>
                                        {{/urls.userlist}}
                                    {{/discussion.group}}
                                </td>
                            {{/forum.state.groupmode}}
                            <td class="author align-middle fit-content limit-width px-3">
                                {{#firstpostauthor}}
                                    <div class="d-flex">
                                        <div class="align-middle p-0">
                                            <img class="rounded-circle userpicture" src="{{urls.profileimage}}"
                                                 alt="{{#str}}pictureof, moodle, {{fullname}}{{/str}}"
                                                 title="{{#str}}pictureof, moodle, {{fullname}}{{/str}}" >
                                        </div>
                                        <div class="author-info align-middle">
                                            <div class="mb-1 line-height-3 text-truncate">{{fullname}}</div>
                                            <div class="line-height-3">
                                                {{< core/time_element }}
                                                    {{$elementid}}created-{{discussion.id}}{{/elementid}}
                                                    {{$timestampval}}{{discussion.times.created}}{{/timestampval}}
                                                    {{$userdateformatval}}{{#str}}strftimedatemonthabbr, langconfig{{/str}}{{/userdateformatval}}
                                                {{/core/time_element}}
                                            </div>
                                        </div>
                                    </div>
                                {{/firstpostauthor}}
                            </td>
                            <td class="text-left align-middle fit-content limit-width px-3">
                                {{! TODO Check q&a, eachuser }}
                                {{#latestpostauthor}}
                                    <div class="d-flex">
                                        <div class="align-middle p-0">
                                            <img class="rounded-circle userpicture" src="{{urls.profileimage}}"
                                                 alt="{{#str}}pictureof, moodle, {{fullname}}{{/str}}"
                                                 title="{{#str}}pictureof, moodle, {{fullname}}{{/str}}" >
                                        </div>
                                        <div class="author-info align-middle">
                                            <div class="mb-1 line-height-3 text-truncate">{{fullname}}</div>
                                            <div class="line-height-3">
                                                {{#latestpostid}}
                                                    <a href="{{{discussion.urls.viewlatest}}}" title="{{#userdate}}{{discussion.times.modified}},{{#str}}strftimerecentfull{{/str}}{{/userdate}}">
                                                        {{< core/time_element }}
                                                            {{$elementid}}modified-{{discussion.id}}{{/elementid}}
                                                            {{$timestampval}}{{discussion.times.modified}}{{/timestampval}}
                                                            {{$userdateformatval}}{{#str}}strftimedatemonthabbr, langconfig{{/str}}{{/userdateformatval}}
                                                        {{/ core/time_element }}
                                                    </a>
                                                {{/latestpostid}}
                                            </div>
                                        </div>
                                    </div>
                                {{/latestpostauthor}}
                            </td>
                            {{#forum.capabilities.viewdiscussions}}
                                <td class="p-0 text-center align-middle fit-content px-2">
                                    <span>{{replies}}</span>
                                    {{#forum.userstate.tracked}}
                                        {{#unread}}
                                        {{! TODO Rewrite as AJAX}}
                                            <span class="lead">
                                                <a href="{{{discussion.urls.viewfirstunread}}}" class="badge badge-primary rounded-pill font-weight-normal"
                                                   title="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}" aria-label="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}">
                                                    {{unread}}
                                                </a>
                                            </span>
                                        {{/unread}}
                                    {{/forum.userstate.tracked}}
                                </td>
                            {{/forum.capabilities.viewdiscussions}}
                            {{#forum.capabilities.subscribe}}
                                <td class="text-center align-middle fit-content px-2">
                                    {{#discussion}}
                                        <div class="d-inline custom-control custom-switch mb-1">
                                            <input
                                                type="checkbox"
                                                class="custom-control-input"
                                                id="subscription-toggle-{{id}}"
                                                data-type="subscription-toggle"
                                                data-action="toggle"
                                                data-discussionid="{{id}}"
                                                data-forumid="{{forumid}}"
                                                {{#userstate.subscribed}}data-targetstate="0" checked{{/userstate.subscribed}}
                                                {{^userstate.subscribed}}data-targetstate="1"{{/userstate.subscribed}}>
                                            <label class="custom-control-label" for="subscription-toggle-{{id}}">
                                                <span class="sr-only">
                                                    {{#userstate.subscribed}}
                                                        {{#str}}unsubscribediscussion, forum{{/str}}
                                                    {{/userstate.subscribed}}
                                                    {{^userstate.subscribed}}
                                                        {{#str}}subscribediscussion, forum{{/str}}
                                                    {{/userstate.subscribed}}
                                                </span>
                                            </label>
                                        </div>
                                    {{/discussion}}
                                </td>
                            {{/forum.capabilities.subscribe}}
                            <td class="p-0 align-middle fit-content" data-container="discussion-summary-actions">
                                {{#discussion}}
                                    <div class="d-flex flex-wrap justify-content-end icon-no-margin">
                                        {{#hasanyactions}}
                                            <div data-container=\'discussion-tools\'>
                                                {{> mod_forum/forum_action_menu}}
                                            </div>
                                        {{/hasanyactions}}
                                    </div>
                                {{/discussion}}
                            </td>
                        </tr>
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
                
                $buffer .= $indent . '                        <tr class="discussion';
                // 'discussion.pinned' section
                $value = $context->findDot('discussion.pinned');
                $buffer .= $this->section06a429e123576badc8e52295604a303d($context, $indent, $value);
                // 'discussion.userstate.favourited' section
                $value = $context->findDot('discussion.userstate.favourited');
                $buffer .= $this->sectionB1a9d8cd1e354f9bf974f188e724426f($context, $indent, $value);
                // 'discussion.userstate.subscribed' section
                $value = $context->findDot('discussion.userstate.subscribed');
                $buffer .= $this->sectionD311956d9afbf7e7dbf59246fb7bcedc($context, $indent, $value);
                // 'unread' section
                $value = $context->find('unread');
                $buffer .= $this->section924a19be55d41b812cbdef471b525004($context, $indent, $value);
                // 'discussion.timed' section
                $value = $context->findDot('discussion.timed');
                $buffer .= $this->sectionB9852e56b2e2e71abe5d2768426c44af($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                            data-region="discussion-list-item"
';
                $buffer .= $indent . '                            data-discussionid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                            data-forumid="';
                $value = $this->resolveValue($context->find('forumid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <td class="p-0 text-center align-middle icon-no-margin" style="width: 1px;">
';
                // 'discussion.pinned' section
                $value = $context->findDot('discussion.pinned');
                $buffer .= $this->sectionDed8643fe770479fc2009169ad7d65dd($context, $indent, $value);
                // 'discussion.pinned' inverted section
                $value = $context->findDot('discussion.pinned');
                if (empty($value)) {
                    
                    // 'discussion' section
                    $value = $context->find('discussion');
                    $buffer .= $this->sectionC96152b3d6149033c0798e80794e8731($context, $indent, $value);
                }
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <th scope="row" class="topic p-0 align-middle">
';
                $buffer .= $indent . '                                <div class="p-3 pl-0">
';
                $buffer .= $indent . '                                    <a class="w-100 h-100 d-block" href="';
                $value = $this->resolveValue($context->findDot('discussion.urls.view'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->findDot('discussion.name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" aria-label="';
                $value = $this->resolveValue($context->findDot('discussion.name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        ';
                // 'shortentext' section
                $value = $context->find('shortentext');
                $buffer .= $this->sectionA9c739fd0fabc4eb11ea586804b0ba1f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                    <div>
';
                $buffer .= $indent . '                                        <span class="badge badge-danger rounded" data-region="locked-label" ';
                // 'discussion.locked' inverted section
                $value = $context->findDot('discussion.locked');
                if (empty($value)) {
                    
                    $buffer .= 'hidden';
                }
                $buffer .= '>
';
                $buffer .= $indent . '                                            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section803e155e7b88f0a1bd6fbad5707cfc46($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </span>
';
                // 'discussion.timed.istimed' section
                $value = $context->findDot('discussion.timed.istimed');
                $buffer .= $this->sectionC3cddc07a38622609ff78fe80f73f279($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </th>
';
                // 'forum.state.groupmode' section
                $value = $context->findDot('forum.state.groupmode');
                $buffer .= $this->section2d9baa8c14974375f73b9a02b818d628($context, $indent, $value);
                $buffer .= $indent . '                            <td class="author align-middle fit-content limit-width px-3">
';
                // 'firstpostauthor' section
                $value = $context->find('firstpostauthor');
                $buffer .= $this->section4132191a96ea53564b7c4bfa035c6b12($context, $indent, $value);
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td class="text-left align-middle fit-content limit-width px-3">
';
                // 'latestpostauthor' section
                $value = $context->find('latestpostauthor');
                $buffer .= $this->sectionA44fd6791449290a999827936c9bffa4($context, $indent, $value);
                $buffer .= $indent . '                            </td>
';
                // 'forum.capabilities.viewdiscussions' section
                $value = $context->findDot('forum.capabilities.viewdiscussions');
                $buffer .= $this->section136f45f5ecfddcbd0dd4606908001de7($context, $indent, $value);
                // 'forum.capabilities.subscribe' section
                $value = $context->findDot('forum.capabilities.subscribe');
                $buffer .= $this->section225d09ef6a113bb76c7f291809d3474e($context, $indent, $value);
                $buffer .= $indent . '                            <td class="p-0 align-middle fit-content" data-container="discussion-summary-actions">
';
                // 'discussion' section
                $value = $context->find('discussion');
                $buffer .= $this->section9c0a5f5e4278725ea50a0a54f54881c4($context, $indent, $value);
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF12349f63285108940afea8a0d223ab2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="forumaddnew">
                <a href="{{create_discussion_link}}" class="btn btn-primary">{{create_discussion_link_text}}</a>
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
                
                $buffer .= $indent . '            <div class="forumaddnew">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('create_discussion_link'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-primary">';
                $value = $this->resolveValue($context->find('create_discussion_link_text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF762024f4be0a3848f3384ecbbe6415d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{$discussion_top_pagination}}
            {{{ pagination }}}
        {{/discussion_top_pagination}}
        {{$discussion_list_output}}
            <table class="table discussion-list">
                <caption id="discussion-table-description-{{uniqid}}" class="sr-only">
                    {{#str}} showingcountoftotaldiscussions, mod_forum, {"count": "{{visiblediscussioncount}}", "total":"{{totaldiscussioncount}}"} {{/str}}
                </caption>
                {{$discussion_list_header}}
                <thead>
                    <tr>
                        <th scope="col">
                            <span class="accesshide">{{#str}}status{{/str}}</span>
                        </th>
                        <th scope="col" class="pl-0">
                            {{#state.sortorder.isdiscussiondesc}}
                                <a href="{{{forum.urls.sortdiscussionasc}}}" aria-label="{{#str}}discussionlistsortbydiscussionasc, mod_forum{{/str}}">{{#str}}discussion, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.isdiscussiondesc}}
                            {{#state.sortorder.isdiscussionasc}}
                                <a href="{{{forum.urls.sortdiscussiondesc}}}" aria-label="{{#str}}discussionlistsortbydiscussiondesc, mod_forum{{/str}}">{{#str}}discussion, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.isdiscussionasc}}
                            {{^state.sortorder.isdiscussiondesc}}
                                {{^state.sortorder.isdiscussionasc}}
                                    <a href="{{{forum.urls.sortdiscussiondesc}}}" aria-label="{{#str}}discussionlistsortbydiscussiondesc, mod_forum{{/str}}">{{#str}}discussion, mod_forum{{/str}}</a>
                                {{/state.sortorder.isdiscussionasc}}
                            {{/state.sortorder.isdiscussiondesc}}
                        </th>
                        {{#forum.state.groupmode}}
                        <th scope="col" class="group px-3">
                            {{#state.sortorder.isgroupdesc}}
                                <a href="{{{forum.urls.sortgroupasc}}}" aria-label="{{#str}}discussionlistsortbygroupasc, mod_forum{{/str}}">{{#str}}group{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.isgroupdesc}}
                            {{#state.sortorder.isgroupasc}}
                                <a href="{{{forum.urls.sortgroupdesc}}}" aria-label="{{#str}}discussionlistsortbygroupdesc, mod_forum{{/str}}">{{#str}}group{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.isgroupasc}}
                            {{^state.sortorder.isgroupdesc}}
                                {{^state.sortorder.isgroupasc}}
                                    <a href="{{{forum.urls.sortgroupdesc}}}" aria-label="{{#str}}discussionlistsortbygroupdesc, mod_forum{{/str}}">{{#str}}group{{/str}}</a>
                                {{/state.sortorder.isgroupasc}}
                            {{/state.sortorder.isgroupdesc}}
                        </th>
                        {{/forum.state.groupmode}}
                        <th scope="col" class="author px-3">
                            {{#state.sortorder.isstarterdesc}}
                                <a href="{{{forum.urls.sortstarterasc}}}" aria-label="{{#str}}discussionlistsortbystarterasc, mod_forum{{/str}}">{{#str}}startedby, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.isstarterdesc}}
                            {{#state.sortorder.isstarterasc}}
                                <a href="{{{forum.urls.sortstarterdesc}}}" aria-label="{{#str}}discussionlistsortbystarterdesc, mod_forum{{/str}}">{{#str}}startedby, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.isstarterasc}}
                            {{^state.sortorder.isstarterdesc}}
                                {{^state.sortorder.isstarterasc}}
                                    <a href="{{{forum.urls.sortstarterdesc}}}" aria-label="{{#str}}discussionlistsortbystarterdesc, mod_forum{{/str}}">{{#str}}startedby, mod_forum{{/str}}</a>
                                {{/state.sortorder.isstarterasc}}
                            {{/state.sortorder.isstarterdesc}}
                        </th>
                        <th scope="col" class="lastpost px-3">
                            {{#state.sortorder.islastpostdesc}}
                                <a href="{{{forum.urls.sortlastpostasc}}}" aria-label="{{#str}}discussionlistsortbylastpostasc, mod_forum{{/str}}">{{#str}}lastpost, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.islastpostdesc}}
                            {{#state.sortorder.islastpostasc}}
                                <a href="{{{forum.urls.sortlastpostdesc}}}" aria-label="{{#str}}discussionlistsortbylastpostdesc, mod_forum{{/str}}">{{#str}}lastpost, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.islastpostasc}}
                            {{^state.sortorder.islastpostdesc}}
                                {{^state.sortorder.islastpostasc}}
                                    <a href="{{{forum.urls.sortlastpostdesc}}}" aria-label="{{#str}}discussionlistsortbylastpostdesc, mod_forum{{/str}}">{{#str}}lastpost, mod_forum{{/str}}</a>
                                {{/state.sortorder.islastpostasc}}
                            {{/state.sortorder.islastpostdesc}}
                        </th>
                        {{#forum.capabilities.viewdiscussions}}
                            <th scope="col" class="text-center px-2">
                                {{#state.sortorder.isrepliesdesc}}
                                    <a href="{{{forum.urls.sortrepliesasc}}}" aria-label="{{#str}}discussionlistsortbyrepliesasc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                                {{/state.sortorder.isrepliesdesc}}
                                {{#state.sortorder.isrepliesasc}}
                                    <a href="{{{forum.urls.sortrepliesdesc}}}" aria-label="{{#str}}discussionlistsortbyrepliesdesc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                                {{/state.sortorder.isrepliesasc}}
                                {{^state.sortorder.isrepliesdesc}}
                                    {{^state.sortorder.isrepliesasc}}
                                        <a href="{{{forum.urls.sortrepliesdesc}}}" aria-label="{{#str}}discussionlistsortbyrepliesdesc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a>
                                    {{/state.sortorder.isrepliesasc}}
                                {{/state.sortorder.isrepliesdesc}}
                                {{#forum.userstate.tracked}}
                                    <a href="{{{forum.urls.markasread}}}">{{#pix}}t/markasread, core, {{#str}}markallread, mod_forum{{/str}}{{/pix}}</a>
                                {{/forum.userstate.tracked}}
                            </th>
                        {{/forum.capabilities.viewdiscussions}}
                        {{#forum.capabilities.subscribe}}
                            <th scope="col" class="text-center px-2">{{#str}} notsubscribed, mod_forum {{/str}}</th>
                        {{/forum.capabilities.subscribe}}
                        <th scope="col" class="discussionsubscription">
                            <span class="accesshide">{{#str}}actions{{/str}}</span>
                        </th>
                    </tr>
                </thead>
                {{/discussion_list_header}}
                {{$discussion_list_body}}
                <tbody>
                    {{#summaries}}
                        {{! The discussion class is only required for behat tests to identify the row. }}
                        <tr class="discussion{{!
                                }}{{#discussion.pinned}} pinned{{/discussion.pinned}}{{!
                                }}{{#discussion.userstate.favourited}} favourited{{/discussion.userstate.favourited}}{{!
                                }}{{#discussion.userstate.subscribed}} subscribed{{/discussion.userstate.subscribed}}{{!
                                }}{{#unread}} hasunread{{/unread}}{{!
                                }}{{#discussion.timed}}{{#istimed}}{{^visible}} dimmed_text{{/visible}}{{/istimed}}{{/discussion.timed}}"
                            data-region="discussion-list-item"
                            data-discussionid="{{id}}"
                            data-forumid="{{forumid}}">
                            <td class="p-0 text-center align-middle icon-no-margin" style="width: 1px;">
                                {{#discussion.pinned}}
                                    {{#pix}}i/pinned, mod_forum, {{#str}}discussionpinned, mod_forum{{/str}}{{/pix}}
                                {{/discussion.pinned}}
                                {{^discussion.pinned}}
                                    {{#discussion}}
                                        {{> mod_forum/forum_discussion_favourite_toggle}}
                                    {{/discussion}}
                                {{/discussion.pinned}}
                            </td>
                            <th scope="row" class="topic p-0 align-middle">
                                <div class="p-3 pl-0">
                                    <a class="w-100 h-100 d-block" href="{{discussion.urls.view}}" title="{{discussion.name}}" aria-label="{{discussion.name}}">
                                        {{#shortentext}}100, {{{discussion.name}}}{{/shortentext}}
                                    </a>
                                    <div>
                                        <span class="badge badge-danger rounded" data-region="locked-label" {{^discussion.locked}}hidden{{/discussion.locked}}>
                                            {{#str}}locked, forum{{/str}}
                                        </span>
                                        {{#discussion.timed.istimed}}
                                        <span>
                                             <button class="btn badge badge-primary rounded border-0" data-region="timed-label"
                                                data-toggle="popover" data-container="body" data-placement="right" data-html="true"
                                                data-content={{#quote}}{{#discussion.timed}}{{#discussion.times}}{{> mod_forum/discussion_times}}{{/discussion.times}}{{/discussion.timed}}{{/quote}}
                                                data-trigger="click" aria-label="{{#str}}timeddiscussion, forum{{/str}}" title="{{#str}}timeddiscussion, forum{{/str}}">
                                                 {{#str}}timed, forum{{/str}}
                                             </button>
                                        </span>
                                        {{/discussion.timed.istimed}}
                                    </div>
                                </div>
                            </th>
                            {{#forum.state.groupmode}}
                                <td class="group align-middle fit-content limit-width px-3">
                                    {{#discussion.group}}
                                        <img alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                             class="border rounded h-auto rounded-circle grouppicture"
                                             src="{{{urls.picture}}}"
                                             title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                        {{#urls.userlist}}
                                            <a href="{{{urls.userlist}}}" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'
                                               title=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                                {{#shortentext}}30, {{name}}{{/shortentext}}
                                            </a>
                                        {{/urls.userlist}}
                                        {{^urls.userlist}}
                                            <span>{{name}}</span>
                                        {{/urls.userlist}}
                                    {{/discussion.group}}
                                </td>
                            {{/forum.state.groupmode}}
                            <td class="author align-middle fit-content limit-width px-3">
                                {{#firstpostauthor}}
                                    <div class="d-flex">
                                        <div class="align-middle p-0">
                                            <img class="rounded-circle userpicture" src="{{urls.profileimage}}"
                                                 alt="{{#str}}pictureof, moodle, {{fullname}}{{/str}}"
                                                 title="{{#str}}pictureof, moodle, {{fullname}}{{/str}}" >
                                        </div>
                                        <div class="author-info align-middle">
                                            <div class="mb-1 line-height-3 text-truncate">{{fullname}}</div>
                                            <div class="line-height-3">
                                                {{< core/time_element }}
                                                    {{$elementid}}created-{{discussion.id}}{{/elementid}}
                                                    {{$timestampval}}{{discussion.times.created}}{{/timestampval}}
                                                    {{$userdateformatval}}{{#str}}strftimedatemonthabbr, langconfig{{/str}}{{/userdateformatval}}
                                                {{/core/time_element}}
                                            </div>
                                        </div>
                                    </div>
                                {{/firstpostauthor}}
                            </td>
                            <td class="text-left align-middle fit-content limit-width px-3">
                                {{! TODO Check q&a, eachuser }}
                                {{#latestpostauthor}}
                                    <div class="d-flex">
                                        <div class="align-middle p-0">
                                            <img class="rounded-circle userpicture" src="{{urls.profileimage}}"
                                                 alt="{{#str}}pictureof, moodle, {{fullname}}{{/str}}"
                                                 title="{{#str}}pictureof, moodle, {{fullname}}{{/str}}" >
                                        </div>
                                        <div class="author-info align-middle">
                                            <div class="mb-1 line-height-3 text-truncate">{{fullname}}</div>
                                            <div class="line-height-3">
                                                {{#latestpostid}}
                                                    <a href="{{{discussion.urls.viewlatest}}}" title="{{#userdate}}{{discussion.times.modified}},{{#str}}strftimerecentfull{{/str}}{{/userdate}}">
                                                        {{< core/time_element }}
                                                            {{$elementid}}modified-{{discussion.id}}{{/elementid}}
                                                            {{$timestampval}}{{discussion.times.modified}}{{/timestampval}}
                                                            {{$userdateformatval}}{{#str}}strftimedatemonthabbr, langconfig{{/str}}{{/userdateformatval}}
                                                        {{/ core/time_element }}
                                                    </a>
                                                {{/latestpostid}}
                                            </div>
                                        </div>
                                    </div>
                                {{/latestpostauthor}}
                            </td>
                            {{#forum.capabilities.viewdiscussions}}
                                <td class="p-0 text-center align-middle fit-content px-2">
                                    <span>{{replies}}</span>
                                    {{#forum.userstate.tracked}}
                                        {{#unread}}
                                        {{! TODO Rewrite as AJAX}}
                                            <span class="lead">
                                                <a href="{{{discussion.urls.viewfirstunread}}}" class="badge badge-primary rounded-pill font-weight-normal"
                                                   title="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}" aria-label="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}">
                                                    {{unread}}
                                                </a>
                                            </span>
                                        {{/unread}}
                                    {{/forum.userstate.tracked}}
                                </td>
                            {{/forum.capabilities.viewdiscussions}}
                            {{#forum.capabilities.subscribe}}
                                <td class="text-center align-middle fit-content px-2">
                                    {{#discussion}}
                                        <div class="d-inline custom-control custom-switch mb-1">
                                            <input
                                                type="checkbox"
                                                class="custom-control-input"
                                                id="subscription-toggle-{{id}}"
                                                data-type="subscription-toggle"
                                                data-action="toggle"
                                                data-discussionid="{{id}}"
                                                data-forumid="{{forumid}}"
                                                {{#userstate.subscribed}}data-targetstate="0" checked{{/userstate.subscribed}}
                                                {{^userstate.subscribed}}data-targetstate="1"{{/userstate.subscribed}}>
                                            <label class="custom-control-label" for="subscription-toggle-{{id}}">
                                                <span class="sr-only">
                                                    {{#userstate.subscribed}}
                                                        {{#str}}unsubscribediscussion, forum{{/str}}
                                                    {{/userstate.subscribed}}
                                                    {{^userstate.subscribed}}
                                                        {{#str}}subscribediscussion, forum{{/str}}
                                                    {{/userstate.subscribed}}
                                                </span>
                                            </label>
                                        </div>
                                    {{/discussion}}
                                </td>
                            {{/forum.capabilities.subscribe}}
                            <td class="p-0 align-middle fit-content" data-container="discussion-summary-actions">
                                {{#discussion}}
                                    <div class="d-flex flex-wrap justify-content-end icon-no-margin">
                                        {{#hasanyactions}}
                                            <div data-container=\'discussion-tools\'>
                                                {{> mod_forum/forum_action_menu}}
                                            </div>
                                        {{/hasanyactions}}
                                    </div>
                                {{/discussion}}
                            </td>
                        </tr>
                    {{/summaries}}
                </tbody>
                {{/discussion_list_body}}
            </table>
        {{/discussion_list_output}}
        {{$discussion_bottom_pagination}}
            {{{ pagination }}}
        {{/discussion_bottom_pagination}}
        {{#can_create_discussion}}
            <div class="forumaddnew">
                <a href="{{create_discussion_link}}" class="btn btn-primary">{{create_discussion_link_text}}</a>
            </div>
        {{/can_create_discussion}}
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
                
                $blockFunction = $context->findInBlock('discussion_top_pagination');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '            ';
                    $value = $this->resolveValue($context->find('pagination'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                }
                $blockFunction = $context->findInBlock('discussion_list_output');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '            <table class="table discussion-list">
';
                    $buffer .= $indent . '                <caption id="discussion-table-description-';
                    $value = $this->resolveValue($context->find('uniqid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" class="sr-only">
';
                    $buffer .= $indent . '                    ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionEb7616eb082d38ffbff265dd116717ed($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                </caption>
';
                    $blockFunction = $context->findInBlock('discussion_list_header');
                    if (is_callable($blockFunction)) {
                        $buffer .= call_user_func($blockFunction, $context);
                    } else {
                        $buffer .= $indent . '                <thead>
';
                        $buffer .= $indent . '                    <tr>
';
                        $buffer .= $indent . '                        <th scope="col">
';
                        $buffer .= $indent . '                            <span class="accesshide">';
                        // 'str' section
                        $value = $context->find('str');
                        $buffer .= $this->sectionE1a6182796dd1b976d215abc089edf1e($context, $indent, $value);
                        $buffer .= '</span>
';
                        $buffer .= $indent . '                        </th>
';
                        $buffer .= $indent . '                        <th scope="col" class="pl-0">
';
                        // 'state.sortorder.isdiscussiondesc' section
                        $value = $context->findDot('state.sortorder.isdiscussiondesc');
                        $buffer .= $this->sectionBad9008d293eb3f49f406678d25d43c7($context, $indent, $value);
                        // 'state.sortorder.isdiscussionasc' section
                        $value = $context->findDot('state.sortorder.isdiscussionasc');
                        $buffer .= $this->sectionAce5b65bd6166810895226f1d9e70d64($context, $indent, $value);
                        // 'state.sortorder.isdiscussiondesc' inverted section
                        $value = $context->findDot('state.sortorder.isdiscussiondesc');
                        if (empty($value)) {
                            
                            // 'state.sortorder.isdiscussionasc' inverted section
                            $value = $context->findDot('state.sortorder.isdiscussionasc');
                            if (empty($value)) {
                                
                                $buffer .= $indent . '                                    <a href="';
                                $value = $this->resolveValue($context->findDot('forum.urls.sortdiscussiondesc'), $context);
                                $buffer .= $value;
                                $buffer .= '" aria-label="';
                                // 'str' section
                                $value = $context->find('str');
                                $buffer .= $this->sectionEf9629036b0703b6b8c3ca28b91e7251($context, $indent, $value);
                                $buffer .= '">';
                                // 'str' section
                                $value = $context->find('str');
                                $buffer .= $this->sectionC1992336f71ab27e96dd60b73814a51c($context, $indent, $value);
                                $buffer .= '</a>
';
                            }
                        }
                        $buffer .= $indent . '                        </th>
';
                        // 'forum.state.groupmode' section
                        $value = $context->findDot('forum.state.groupmode');
                        $buffer .= $this->section2ac56bd7e492ace9740008d0ec925901($context, $indent, $value);
                        $buffer .= $indent . '                        <th scope="col" class="author px-3">
';
                        // 'state.sortorder.isstarterdesc' section
                        $value = $context->findDot('state.sortorder.isstarterdesc');
                        $buffer .= $this->sectionB9699a9322a6f784b0b9f9e5f6deb953($context, $indent, $value);
                        // 'state.sortorder.isstarterasc' section
                        $value = $context->findDot('state.sortorder.isstarterasc');
                        $buffer .= $this->section3d370229eb860e5e770278c070587664($context, $indent, $value);
                        // 'state.sortorder.isstarterdesc' inverted section
                        $value = $context->findDot('state.sortorder.isstarterdesc');
                        if (empty($value)) {
                            
                            // 'state.sortorder.isstarterasc' inverted section
                            $value = $context->findDot('state.sortorder.isstarterasc');
                            if (empty($value)) {
                                
                                $buffer .= $indent . '                                    <a href="';
                                $value = $this->resolveValue($context->findDot('forum.urls.sortstarterdesc'), $context);
                                $buffer .= $value;
                                $buffer .= '" aria-label="';
                                // 'str' section
                                $value = $context->find('str');
                                $buffer .= $this->sectionC00eea43088295dd7c1188b2e55e141a($context, $indent, $value);
                                $buffer .= '">';
                                // 'str' section
                                $value = $context->find('str');
                                $buffer .= $this->section0b223ddf50719647c9723401fba2694d($context, $indent, $value);
                                $buffer .= '</a>
';
                            }
                        }
                        $buffer .= $indent . '                        </th>
';
                        $buffer .= $indent . '                        <th scope="col" class="lastpost px-3">
';
                        // 'state.sortorder.islastpostdesc' section
                        $value = $context->findDot('state.sortorder.islastpostdesc');
                        $buffer .= $this->section0b74d0d3dddae194ae813b11c040df0d($context, $indent, $value);
                        // 'state.sortorder.islastpostasc' section
                        $value = $context->findDot('state.sortorder.islastpostasc');
                        $buffer .= $this->section39d65f4cf2ca71bd20c9152bea80692c($context, $indent, $value);
                        // 'state.sortorder.islastpostdesc' inverted section
                        $value = $context->findDot('state.sortorder.islastpostdesc');
                        if (empty($value)) {
                            
                            // 'state.sortorder.islastpostasc' inverted section
                            $value = $context->findDot('state.sortorder.islastpostasc');
                            if (empty($value)) {
                                
                                $buffer .= $indent . '                                    <a href="';
                                $value = $this->resolveValue($context->findDot('forum.urls.sortlastpostdesc'), $context);
                                $buffer .= $value;
                                $buffer .= '" aria-label="';
                                // 'str' section
                                $value = $context->find('str');
                                $buffer .= $this->sectionEa917cd08c45399601e65090de917ad3($context, $indent, $value);
                                $buffer .= '">';
                                // 'str' section
                                $value = $context->find('str');
                                $buffer .= $this->sectionBc4bf659abc5d7e4d1fa879fd68d56c8($context, $indent, $value);
                                $buffer .= '</a>
';
                            }
                        }
                        $buffer .= $indent . '                        </th>
';
                        // 'forum.capabilities.viewdiscussions' section
                        $value = $context->findDot('forum.capabilities.viewdiscussions');
                        $buffer .= $this->section023ff56674ddd39239d5a6a87c224365($context, $indent, $value);
                        // 'forum.capabilities.subscribe' section
                        $value = $context->findDot('forum.capabilities.subscribe');
                        $buffer .= $this->section40a468369b699f550de11d88b2b0d5c8($context, $indent, $value);
                        $buffer .= $indent . '                        <th scope="col" class="discussionsubscription">
';
                        $buffer .= $indent . '                            <span class="accesshide">';
                        // 'str' section
                        $value = $context->find('str');
                        $buffer .= $this->section2ad2fdcc9b858451e82e60edfcdcf48d($context, $indent, $value);
                        $buffer .= '</span>
';
                        $buffer .= $indent . '                        </th>
';
                        $buffer .= $indent . '                    </tr>
';
                        $buffer .= $indent . '                </thead>
';
                    }
                    $blockFunction = $context->findInBlock('discussion_list_body');
                    if (is_callable($blockFunction)) {
                        $buffer .= call_user_func($blockFunction, $context);
                    } else {
                        $buffer .= $indent . '                <tbody>
';
                        // 'summaries' section
                        $value = $context->find('summaries');
                        $buffer .= $this->section64679d3eb07b6e6ae915eddabf82c2da($context, $indent, $value);
                        $buffer .= $indent . '                </tbody>
';
                    }
                    $buffer .= $indent . '            </table>
';
                }
                $blockFunction = $context->findInBlock('discussion_bottom_pagination');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '            ';
                    $value = $this->resolveValue($context->find('pagination'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                }
                // 'can_create_discussion' section
                $value = $context->find('can_create_discussion');
                $buffer .= $this->sectionF12349f63285108940afea8a0d223ab2($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59c4aea0943e493fb1621a8d24c8bd0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nodiscussions, forum';
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
                
                $buffer .= 'nodiscussions, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f073c9308d156e8945ad42420be31cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\', \'mod_forum/discussion_list\'], function($, View) {
        var root = $(\'#discussion-list-{{uniqid}}\');
        View.init(root);
    });
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
                
                $buffer .= $indent . '    require([\'jquery\', \'mod_forum/discussion_list\'], function($, View) {
';
                $buffer .= $indent . '        var root = $(\'#discussion-list-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');
';
                $buffer .= $indent . '        View.init(root);
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockE1e9e778bab467b9e0337eccd0a7c89c($context)
    {
        $indent = $buffer = '';
        $buffer .= 'created-';
        $value = $this->resolveValue($context->findDot('discussion.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
    
        return $buffer;
    }

    public function block688783e55412ca72f488fab25d35f8a8($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->findDot('discussion.times.created'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
    
        return $buffer;
    }

    public function blockA0daf0b849ef0aadd12e3dcd7865f25b($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section3a6e53f90c6dd41d1acb0c171f9b04ca($context, $indent, $value);
    
        return $buffer;
    }

    public function block00c73a8ee8b83206d8db69122fc7d7b1($context)
    {
        $indent = $buffer = '';
        $buffer .= 'modified-';
        $value = $this->resolveValue($context->findDot('discussion.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
    
        return $buffer;
    }

    public function block1255ed35768fc1e80bf6445a3cdd5909($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->findDot('discussion.times.modified'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
    
        return $buffer;
    }
}
