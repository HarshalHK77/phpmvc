package com.example.demo.controller;

import com.example.demo.model.FormData;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.ModelAttribute;

@Controller
public class FormController {

    @GetMapping("/form")
    public String showForm(Model model) {
        model.addAttribute("formData", new FormData());
        return "form"; // Renders form.jsp
    }

    @PostMapping("/submitForm")
    public String submitForm(@ModelAttribute FormData formData, Model model) {
        model.addAttribute("formData", formData);
        return "result"; // Renders result.jsp with submitted data
    }
}
