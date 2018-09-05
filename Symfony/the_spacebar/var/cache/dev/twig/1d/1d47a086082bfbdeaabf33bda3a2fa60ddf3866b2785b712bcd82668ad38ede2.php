<?php

/* @Httplug/stack.html.twig */
class __TwigTemplate_df00b2b98b7501c6686a95aaa9d48258774898bfb1f8d5fda37226bf901d4c95 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Httplug/stack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Httplug/stack.html.twig"));

        // line 1
        echo "<div class=\"httplug-stack-header httplug-toggle\" data-toggle=\"#httplug-";
        echo twig_escape_filter($this->env, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "-details\">
    <div>
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 3, $this->source); })()), "failed", array())) {
            // line 4
            echo "            <span class=\"httplug-stack-failed\">✘</span>
        ";
        } else {
            // line 6
            echo "            <span class=\"httplug-stack-success\">✔</span>
        ";
        }
        // line 8
        echo "        <span class=\"label httplug-method httplug-method-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 8, $this->source); })()), "requestMethod", array())), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 8, $this->source); })()), "requestMethod", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"label httplug-stack-header-target\">
        <span class=\"httplug-scheme\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 11, $this->source); })()), "requestScheme", array()), "html", null, true);
        echo "://</span>
        <span class=\"httplug-host\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 12, $this->source); })()), "requestHost", array()), "html", null, true);
        echo "</span>
        <span class=\"httplug-target\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 13, $this->source); })()), "requestTarget", array()), "html", null, true);
        echo "</span>
    </div>
    <div>
        <span class=\"label httplug-duration\">";
        // line 16
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 16, $this->source); })()), "duration", array())), "html", null, true);
        echo " ms</span>
        ";
        // line 17
        if (((twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 17, $this->source); })()), "responseCode", array()) >= 400) && (twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 17, $this->source); })()), "responseCode", array()) <= 599))) {
            // line 18
            echo "            <span class=\"label status-error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 18, $this->source); })()), "responseCode", array()), "html", null, true);
            echo "</span>
        ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 19, $this->source); })()), "responseCode", array()) >= 300) && (twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 19, $this->source); })()), "responseCode", array()) <= 399))) {
            // line 20
            echo "            <span class=\"label status-warning\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 20, $this->source); })()), "responseCode", array()), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 22
            echo "            <span class=\"label status-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 22, $this->source); })()), "responseCode", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 24
        echo "    </div>
</div>
<div id=\"httplug-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "-details\" class=\"httplug-hidden\">
    <div class=\"httplug-toolbar\">
        <div class=\"httplug-copy-as-curl\">
            <input readonly=\"readonly\" type=\"text\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 29, $this->source); })()), "curlCommand", array()), "html", null, true);
        echo "\" />
            <button class=\"btn tooltip-toggle\" aria-label=\"Copy to clipboard\">Copy to clipboard</button>
        </div>
        <button data-toggle=\"#httplug-";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "-stack\" class=\"httplug-toggle btn\" >Toggle plugin stack</button>
        <button data-toggle=\"#httplug-";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "-details .httplug-http-body\" class=\"httplug-toggle btn\">Toggle body</button>
    </div>
    <div class=\"httplug-messages\">
        <div class=\"httplug-message card\">
            <h4>Request</h4>
            ";
        // line 38
        echo nl2br($this->extensions['Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension']->markup(twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 38, $this->source); })()), "clientRequest", array())));
        echo "
        </div>
        <div class=\"httplug-message card\">
            <h4>Response</h4>
            ";
        // line 42
        echo nl2br($this->extensions['Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension']->markup(twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 42, $this->source); })()), "clientResponse", array())));
        echo "
        </div>
    </div>
    ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 45, $this->source); })()), "profiles", array())) {
            // line 46
            echo "        <div id=\"httplug-";
            echo twig_escape_filter($this->env, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "-stack\" class=\"httplug-hidden card\">
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 47, $this->source); })()), "profiles", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
                // line 48
                echo "                <h3 class=\"httplug-plugin-name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "plugin", array()), "html", null, true);
                echo "</h3>
                <div class=\"httplug-messages\">
                    <div class=\"httplug-message\">
                        <h4>Request</h4>
                        ";
                // line 52
                echo nl2br($this->extensions['Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension']->markup(twig_get_attribute($this->env, $this->source, $context["profile"], "request", array())));
                echo "
                    </div>
                    <div class=\"httplug-message\">
                        <h4>Response</h4>
                        ";
                // line 56
                echo nl2br($this->extensions['Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension']->markup(twig_get_attribute($this->env, $this->source, $context["profile"], "response", array())));
                echo "
                    </div>
                </div>
                ";
                // line 59
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    // line 60
                    echo "                    <hr />
                ";
                }
                // line 62
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        </div>
    ";
        }
        // line 65
        echo "</div>
";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 66, $this->source); })()), "childrenStacks", array(0 => (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 66, $this->source); })())), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 67
            echo "    <div class=\"httplug-stack\">
        ";
            // line 68
            $this->loadTemplate("@Httplug/stack.html.twig", "@Httplug/stack.html.twig", 68)->display(array("collector" =>             // line 69
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 69, $this->source); })()), "client" =>             // line 70
(isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 70, $this->source); })()), "stack" =>             // line 71
$context["child"], "id" => ((            // line 72
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 72, $this->source); })()) . "-") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()))));
            // line 74
            echo "    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Httplug/stack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 74,  240 => 72,  239 => 71,  238 => 70,  237 => 69,  236 => 68,  233 => 67,  216 => 66,  213 => 65,  209 => 63,  195 => 62,  191 => 60,  189 => 59,  183 => 56,  176 => 52,  168 => 48,  151 => 47,  144 => 46,  142 => 45,  136 => 42,  129 => 38,  119 => 33,  113 => 32,  107 => 29,  99 => 26,  95 => 24,  89 => 22,  83 => 20,  81 => 19,  76 => 18,  74 => 17,  70 => 16,  64 => 13,  60 => 12,  56 => 11,  47 => 8,  43 => 6,  39 => 4,  37 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"httplug-stack-header httplug-toggle\" data-toggle=\"#httplug-{{ client }}-{{ id }}-details\">
    <div>
        {% if stack.failed %}
            <span class=\"httplug-stack-failed\">✘</span>
        {% else %}
            <span class=\"httplug-stack-success\">✔</span>
        {% endif %}
        <span class=\"label httplug-method httplug-method-{{ stack.requestMethod|lower }}\">{{ stack.requestMethod }}</span>
    </div>
    <div class=\"label httplug-stack-header-target\">
        <span class=\"httplug-scheme\">{{ stack.requestScheme }}://</span>
        <span class=\"httplug-host\">{{ stack.requestHost }}</span>
        <span class=\"httplug-target\">{{ stack.requestTarget }}</span>
    </div>
    <div>
        <span class=\"label httplug-duration\">{{ stack.duration|number_format }} ms</span>
        {% if stack.responseCode >= 400 and stack.responseCode <= 599 %}
            <span class=\"label status-error\">{{ stack.responseCode }}</span>
        {% elseif stack.responseCode >= 300 and stack.responseCode <= 399 %}
            <span class=\"label status-warning\">{{ stack.responseCode }}</span>
        {% else %}
            <span class=\"label status-success\">{{ stack.responseCode }}</span>
        {% endif %}
    </div>
</div>
<div id=\"httplug-{{ client }}-{{ id }}-details\" class=\"httplug-hidden\">
    <div class=\"httplug-toolbar\">
        <div class=\"httplug-copy-as-curl\">
            <input readonly=\"readonly\" type=\"text\" value=\"{{ stack.curlCommand }}\" />
            <button class=\"btn tooltip-toggle\" aria-label=\"Copy to clipboard\">Copy to clipboard</button>
        </div>
        <button data-toggle=\"#httplug-{{ client }}-{{ id }}-stack\" class=\"httplug-toggle btn\" >Toggle plugin stack</button>
        <button data-toggle=\"#httplug-{{ client }}-{{ id }}-details .httplug-http-body\" class=\"httplug-toggle btn\">Toggle body</button>
    </div>
    <div class=\"httplug-messages\">
        <div class=\"httplug-message card\">
            <h4>Request</h4>
            {{ stack.clientRequest|httplug_markup|nl2br }}
        </div>
        <div class=\"httplug-message card\">
            <h4>Response</h4>
            {{ stack.clientResponse|httplug_markup|nl2br }}
        </div>
    </div>
    {% if stack.profiles %}
        <div id=\"httplug-{{ client }}-{{ id }}-stack\" class=\"httplug-hidden card\">
            {% for profile in stack.profiles %}
                <h3 class=\"httplug-plugin-name\">{{ profile.plugin }}</h3>
                <div class=\"httplug-messages\">
                    <div class=\"httplug-message\">
                        <h4>Request</h4>
                        {{ profile.request|httplug_markup|nl2br }}
                    </div>
                    <div class=\"httplug-message\">
                        <h4>Response</h4>
                        {{ profile.response|httplug_markup|nl2br }}
                    </div>
                </div>
                {% if not loop.last %}
                    <hr />
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}
</div>
{% for child in collector.childrenStacks(stack) %}
    <div class=\"httplug-stack\">
        {% include '@Httplug/stack.html.twig' with {
            'collector': collector,
            'client': client,
            'stack': child,
            'id': id ~ '-' ~ loop.index
        } only %}
    </div>
{% endfor %}
", "@Httplug/stack.html.twig", "D:\\GitHub\\My-work\\Symfony\\the_spacebar\\vendor\\php-http\\httplug-bundle\\Resources\\views\\stack.html.twig");
    }
}
