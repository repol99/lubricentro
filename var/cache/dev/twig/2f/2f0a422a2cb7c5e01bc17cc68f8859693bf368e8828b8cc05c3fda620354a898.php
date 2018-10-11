<?php

/* PrestaShopBundle:Admin:macros.html.twig */
class __TwigTemplate_df96ba11ff32e42c356eb5185708601a69895380227fd0a299cd5fef555fc374 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eeca981ffecd20ba55072b317735d54ec0d31921fb88633df811be292e19bec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeca981ffecd20ba55072b317735d54ec0d31921fb88633df811be292e19bec0->enter($__internal_eeca981ffecd20ba55072b317735d54ec0d31921fb88633df811be292e19bec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:macros.html.twig"));

        $__internal_204e882f4f78d7c8117fd59ab9d5e4bc380b480e721dfa81a505233a02bb7bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204e882f4f78d7c8117fd59ab9d5e4bc380b480e721dfa81a505233a02bb7bec->enter($__internal_204e882f4f78d7c8117fd59ab9d5e4bc380b480e721dfa81a505233a02bb7bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:macros.html.twig"));

        // line 28
        echo "
";
        // line 32
        echo "
";
        // line 38
        echo "
";
        // line 46
        echo "
";
        // line 54
        echo "
";
        // line 64
        echo "
";
        // line 81
        echo "
";
        
        $__internal_eeca981ffecd20ba55072b317735d54ec0d31921fb88633df811be292e19bec0->leave($__internal_eeca981ffecd20ba55072b317735d54ec0d31921fb88633df811be292e19bec0_prof);

        
        $__internal_204e882f4f78d7c8117fd59ab9d5e4bc380b480e721dfa81a505233a02bb7bec->leave($__internal_204e882f4f78d7c8117fd59ab9d5e4bc380b480e721dfa81a505233a02bb7bec_prof);

    }

    // line 25
    public function getform_label_tooltip($__name__ = null, $__tooltip__ = null, $__placement__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "tooltip" => $__tooltip__,
            "placement" => $__placement__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_bb714e560b73ae17ae456e6bff1f30d7a13a95250b9c9afc21a4e34c3c509f94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_bb714e560b73ae17ae456e6bff1f30d7a13a95250b9c9afc21a4e34c3c509f94->enter($__internal_bb714e560b73ae17ae456e6bff1f30d7a13a95250b9c9afc21a4e34c3c509f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            $__internal_d4579490858e45df4a0c78580f5913a1bc24cdfec2e28fdce94a1f6921ad6780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d4579490858e45df4a0c78580f5913a1bc24cdfec2e28fdce94a1f6921ad6780->enter($__internal_d4579490858e45df4a0c78580f5913a1bc24cdfec2e28fdce94a1f6921ad6780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            // line 26
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["name"] ?? $this->getContext($context, "name")), 'label', array("label_attr" => array("tooltip" => ($context["tooltip"] ?? $this->getContext($context, "tooltip")), "tooltip_placement" => ((array_key_exists("placement", $context)) ? (_twig_default_filter(($context["placement"] ?? $this->getContext($context, "placement")), "top")) : ("top")))));
            echo "
";
            
            $__internal_d4579490858e45df4a0c78580f5913a1bc24cdfec2e28fdce94a1f6921ad6780->leave($__internal_d4579490858e45df4a0c78580f5913a1bc24cdfec2e28fdce94a1f6921ad6780_prof);

            
            $__internal_bb714e560b73ae17ae456e6bff1f30d7a13a95250b9c9afc21a4e34c3c509f94->leave($__internal_bb714e560b73ae17ae456e6bff1f30d7a13a95250b9c9afc21a4e34c3c509f94_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getcheck($__variable__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "variable" => $__variable__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3e599e648b0d63c9bd8a9b586f9372f54e203f11301875bfeed26bd5d107f681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_3e599e648b0d63c9bd8a9b586f9372f54e203f11301875bfeed26bd5d107f681->enter($__internal_3e599e648b0d63c9bd8a9b586f9372f54e203f11301875bfeed26bd5d107f681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "check"));

            $__internal_d3fead998f9225c1437d02d5fba01766f9b9d3f48ed1c77736acc1b21d1646d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d3fead998f9225c1437d02d5fba01766f9b9d3f48ed1c77736acc1b21d1646d0->enter($__internal_d3fead998f9225c1437d02d5fba01766f9b9d3f48ed1c77736acc1b21d1646d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "check"));

            // line 30
            echo "  ";
            echo twig_escape_filter($this->env, (((array_key_exists("variable", $context) && (twig_length_filter($this->env, ($context["variable"] ?? $this->getContext($context, "variable"))) > 0))) ? (($context["variable"] ?? $this->getContext($context, "variable"))) : (false)), "html", null, true);
            echo "
";
            
            $__internal_d3fead998f9225c1437d02d5fba01766f9b9d3f48ed1c77736acc1b21d1646d0->leave($__internal_d3fead998f9225c1437d02d5fba01766f9b9d3f48ed1c77736acc1b21d1646d0_prof);

            
            $__internal_3e599e648b0d63c9bd8a9b586f9372f54e203f11301875bfeed26bd5d107f681->leave($__internal_3e599e648b0d63c9bd8a9b586f9372f54e203f11301875bfeed26bd5d107f681_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function gettooltip($__text__ = null, $__icon__ = null, $__position__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "icon" => $__icon__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_80719481a36ebb8a053289514ff8f0daaffa6f523b658b95489db199ff50dbe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_80719481a36ebb8a053289514ff8f0daaffa6f523b658b95489db199ff50dbe2->enter($__internal_80719481a36ebb8a053289514ff8f0daaffa6f523b658b95489db199ff50dbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tooltip"));

            $__internal_98f018ac427c3ee36f62452c92af54383a059bfa60ebe9aa373eaacabbb1f46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_98f018ac427c3ee36f62452c92af54383a059bfa60ebe9aa373eaacabbb1f46c->enter($__internal_98f018ac427c3ee36f62452c92af54383a059bfa60ebe9aa373eaacabbb1f46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tooltip"));

            // line 34
            echo "  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "\" data-html=\"true\" data-placement=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("position", $context)) ? (_twig_default_filter(($context["position"] ?? $this->getContext($context, "position")), "top")) : ("top")), "html", null, true);
            echo "\">
    <i class=\"material-icons\">";
            // line 35
            echo twig_escape_filter($this->env, ($context["icon"] ?? $this->getContext($context, "icon")), "html", null, true);
            echo "</i>
  </span>
";
            
            $__internal_98f018ac427c3ee36f62452c92af54383a059bfa60ebe9aa373eaacabbb1f46c->leave($__internal_98f018ac427c3ee36f62452c92af54383a059bfa60ebe9aa373eaacabbb1f46c_prof);

            
            $__internal_80719481a36ebb8a053289514ff8f0daaffa6f523b658b95489db199ff50dbe2->leave($__internal_80719481a36ebb8a053289514ff8f0daaffa6f523b658b95489db199ff50dbe2_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function getinfotip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c61e2b3a06f855567dc7ce4511b74bd8de7ba427d7d282d9e7075e629a3618a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c61e2b3a06f855567dc7ce4511b74bd8de7ba427d7d282d9e7075e629a3618a5->enter($__internal_c61e2b3a06f855567dc7ce4511b74bd8de7ba427d7d282d9e7075e629a3618a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "infotip"));

            $__internal_389cdd4740669ae62f4edd28da092c564178b35cfb2db6eb51979c9c2372ab2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_389cdd4740669ae62f4edd28da092c564178b35cfb2db6eb51979c9c2372ab2c->enter($__internal_389cdd4740669ae62f4edd28da092c564178b35cfb2db6eb51979c9c2372ab2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "infotip"));

            // line 40
            echo "<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 42
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "
  </p>
</div>
";
            
            $__internal_389cdd4740669ae62f4edd28da092c564178b35cfb2db6eb51979c9c2372ab2c->leave($__internal_389cdd4740669ae62f4edd28da092c564178b35cfb2db6eb51979c9c2372ab2c_prof);

            
            $__internal_c61e2b3a06f855567dc7ce4511b74bd8de7ba427d7d282d9e7075e629a3618a5->leave($__internal_c61e2b3a06f855567dc7ce4511b74bd8de7ba427d7d282d9e7075e629a3618a5_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function getwarningtip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_cb29f9046863543d8eb5a96265963c566526ff3f2cfceb2419a419f88949be25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_cb29f9046863543d8eb5a96265963c566526ff3f2cfceb2419a419f88949be25->enter($__internal_cb29f9046863543d8eb5a96265963c566526ff3f2cfceb2419a419f88949be25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "warningtip"));

            $__internal_a67f0626d51f5c119391ee8c0bcd0bcca60d62146be51f1b94bda372c6ed5758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a67f0626d51f5c119391ee8c0bcd0bcca60d62146be51f1b94bda372c6ed5758->enter($__internal_a67f0626d51f5c119391ee8c0bcd0bcca60d62146be51f1b94bda372c6ed5758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "warningtip"));

            // line 48
            echo "<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 50
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "
  </p>
</div>
";
            
            $__internal_a67f0626d51f5c119391ee8c0bcd0bcca60d62146be51f1b94bda372c6ed5758->leave($__internal_a67f0626d51f5c119391ee8c0bcd0bcca60d62146be51f1b94bda372c6ed5758_prof);

            
            $__internal_cb29f9046863543d8eb5a96265963c566526ff3f2cfceb2419a419f88949be25->leave($__internal_cb29f9046863543d8eb5a96265963c566526ff3f2cfceb2419a419f88949be25_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getlabel_with_help($__label__ = null, $__help__ = null, $__class__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "help" => $__help__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6b7648afcae093f9472c2024171129623f920378da3a563690d061eaaed25c25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_6b7648afcae093f9472c2024171129623f920378da3a563690d061eaaed25c25->enter($__internal_6b7648afcae093f9472c2024171129623f920378da3a563690d061eaaed25c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label_with_help"));

            $__internal_2d7aceb721e955265ccaebbc10a551dc758077d383de9b6b4e7691568c04026b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2d7aceb721e955265ccaebbc10a551dc758077d383de9b6b4e7691568c04026b->enter($__internal_2d7aceb721e955265ccaebbc10a551dc758077d383de9b6b4e7691568c04026b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label_with_help"));

            // line 56
            echo "<label class=\"form-control-label ";
            echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
            echo "\">
  ";
            // line 57
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "
  <span class=\"help-box\" data-toggle=\"popover\"
    data-title=\"";
            // line 59
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "\"
    data-content=\"";
            // line 60
            echo twig_escape_filter($this->env, ($context["help"] ?? $this->getContext($context, "help")), "html", null, true);
            echo "\">
  </span>
</label>
";
            
            $__internal_2d7aceb721e955265ccaebbc10a551dc758077d383de9b6b4e7691568c04026b->leave($__internal_2d7aceb721e955265ccaebbc10a551dc758077d383de9b6b4e7691568c04026b_prof);

            
            $__internal_6b7648afcae093f9472c2024171129623f920378da3a563690d061eaaed25c25->leave($__internal_6b7648afcae093f9472c2024171129623f920378da3a563690d061eaaed25c25_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 66
    public function getsortable_column_header($__title__ = null, $__sortColumnName__ = null, $__orderBy__ = null, $__sortOrder__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "sortColumnName" => $__sortColumnName__,
            "orderBy" => $__orderBy__,
            "sortOrder" => $__sortOrder__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3d907b59c59e0a3b25bb2c6e0ba1dfde9cdc89efa32d058af719daa6a17bebaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_3d907b59c59e0a3b25bb2c6e0ba1dfde9cdc89efa32d058af719daa6a17bebaa->enter($__internal_3d907b59c59e0a3b25bb2c6e0ba1dfde9cdc89efa32d058af719daa6a17bebaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "sortable_column_header"));

            $__internal_d36f16242153be6d2adc5de2b229dbf3e0a0c355b447edac4de9055bdeb698b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d36f16242153be6d2adc5de2b229dbf3e0a0c355b447edac4de9055bdeb698b0->enter($__internal_d36f16242153be6d2adc5de2b229dbf3e0a0c355b447edac4de9055bdeb698b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "sortable_column_header"));

            // line 67
            echo "  ";
            list($context["sortOrder"], $context["orderBy"]) =             array(((array_key_exists("sortOrder", $context)) ? (_twig_default_filter(($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "")) : ("")), ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "")) : ("")));
            // line 68
            echo "    <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"";
            // line 70
            echo twig_escape_filter($this->env, ($context["sortColumnName"] ?? $this->getContext($context, "sortColumnName")), "html", null, true);
            echo "\"
      ";
            // line 71
            if ((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == ($context["sortColumnName"] ?? $this->getContext($context, "sortColumnName")))) {
                // line 72
                echo "        data-sort-is-current=\"true\"
        data-sort-direction=\"";
                // line 73
                echo (((($context["sortOrder"] ?? $this->getContext($context, "sortOrder")) == "desc")) ? ("desc") : ("asc"));
                echo "\"
      ";
            }
            // line 75
            echo "    >
      <span role=\"columnheader\">";
            // line 76
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort by", array(), "Admin.Actions"), "html", null, true);
            echo "\"></span>
    </div>
  </th>
";
            
            $__internal_d36f16242153be6d2adc5de2b229dbf3e0a0c355b447edac4de9055bdeb698b0->leave($__internal_d36f16242153be6d2adc5de2b229dbf3e0a0c355b447edac4de9055bdeb698b0_prof);

            
            $__internal_3d907b59c59e0a3b25bb2c6e0ba1dfde9cdc89efa32d058af719daa6a17bebaa->leave($__internal_3d907b59c59e0a3b25bb2c6e0ba1dfde9cdc89efa32d058af719daa6a17bebaa_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 83
    public function getimport_file_sample($__label__ = null, $__filename__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "filename" => $__filename__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_bbb7847ec66848fea18c59fe45649d56adc82cd4dfe8813c1005d35a3d19265e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_bbb7847ec66848fea18c59fe45649d56adc82cd4dfe8813c1005d35a3d19265e->enter($__internal_bbb7847ec66848fea18c59fe45649d56adc82cd4dfe8813c1005d35a3d19265e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "import_file_sample"));

            $__internal_786fb58e15b16ba5f998889f077ae828d0774893ab85762c012590215e7de924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_786fb58e15b16ba5f998889f077ae828d0774893ab85762c012590215e7de924->enter($__internal_786fb58e15b16ba5f998889f077ae828d0774893ab85762c012590215e7de924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "import_file_sample"));

            // line 84
            echo "    <a class=\"list-group-item list-group-item-action _blank\" href=\"../../../../docs/csv_import/";
            echo twig_escape_filter($this->env, ($context["filename"] ?? $this->getContext($context, "filename")), "html", null, true);
            echo ".csv\">
        ";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "
    </a>
";
            
            $__internal_786fb58e15b16ba5f998889f077ae828d0774893ab85762c012590215e7de924->leave($__internal_786fb58e15b16ba5f998889f077ae828d0774893ab85762c012590215e7de924_prof);

            
            $__internal_bbb7847ec66848fea18c59fe45649d56adc82cd4dfe8813c1005d35a3d19265e->leave($__internal_bbb7847ec66848fea18c59fe45649d56adc82cd4dfe8813c1005d35a3d19265e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 85,  437 => 84,  418 => 83,  393 => 77,  389 => 76,  386 => 75,  381 => 73,  378 => 72,  376 => 71,  372 => 70,  368 => 68,  365 => 67,  344 => 66,  319 => 60,  315 => 59,  310 => 57,  305 => 56,  285 => 55,  260 => 50,  256 => 48,  238 => 47,  213 => 42,  209 => 40,  191 => 39,  167 => 35,  160 => 34,  140 => 33,  116 => 30,  98 => 29,  74 => 26,  54 => 25,  43 => 81,  40 => 64,  37 => 54,  34 => 46,  31 => 38,  28 => 32,  25 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% macro form_label_tooltip(name, tooltip, placement) %}
    {{ form_label(name, null, {'label_attr': {'tooltip': tooltip, 'tooltip_placement': placement|default('top')}}) }}
{% endmacro %}

{% macro check(variable) %}
  {{ variable is defined and variable|length > 0 ? variable : false }}
{% endmacro %}

{% macro tooltip(text, icon, position) %}
  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"{{ text }}\" data-html=\"true\" data-placement=\"{{ position|default('top') }}\">
    <i class=\"material-icons\">{{ icon }}</i>
  </span>
{% endmacro %}

{% macro infotip(text)%}
<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    {{ text }}
  </p>
</div>
{% endmacro %}

{% macro warningtip(text)%}
<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    {{ text }}
  </p>
</div>
{% endmacro %}

{% macro label_with_help(label, help, class = '') %}
<label class=\"form-control-label {{ class }}\">
  {{ label }}
  <span class=\"help-box\" data-toggle=\"popover\"
    data-title=\"{{ label }}\"
    data-content=\"{{ help }}\">
  </span>
</label>
{% endmacro %}

{# Table column headers with sorting indicators #}
{% macro sortable_column_header(title, sortColumnName, orderBy, sortOrder) %}
  {% set sortOrder, orderBy = sortOrder|default(''), orderBy|default('') %}
    <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"{{ sortColumnName }}\"
      {% if orderBy == sortColumnName %}
        data-sort-is-current=\"true\"
        data-sort-direction=\"{{ sortOrder == 'desc' ? 'desc' : 'asc' }}\"
      {% endif %}
    >
      <span role=\"columnheader\">{{ title }}</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"{{ 'Sort by'|trans({}, 'Admin.Actions') }}\"></span>
    </div>
  </th>
{% endmacro %}

{# Show link to import file sample #}
{% macro import_file_sample(label, filename) %}
    <a class=\"list-group-item list-group-item-action _blank\" href=\"../../../../docs/csv_import/{{ filename }}.csv\">
        {{ label|trans({}, 'Admin.Advparameters.Feature') }}
    </a>
{% endmacro %}
", "PrestaShopBundle:Admin:macros.html.twig", "D:\\xampp\\htdocs\\lubricentro\\src\\PrestaShopBundle/Resources/views/Admin/macros.html.twig");
    }
}
