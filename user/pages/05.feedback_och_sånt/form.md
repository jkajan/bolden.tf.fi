---
title: Feedback
form:
    name: contact-form
    fields:
        - name: name
          label: Namn
          placeholder: Sätt in ditt namn
          autofocus: on
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          label: Email
          placeholder: Sätt in din emailadress
          type: email
          validate:
            required: true

        - name: comment
          label: Kommentar
          placeholder: Vad har du på hjärtat?
          type: text
          validate:
            required: true

    buttons:
        - type: submit
          value: Submit
        - type: reset
          value: Reset

    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.to }}"
              - "{{ form.value.email }}"
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Tack för din feedback!
        - display: thankyou

---

# Feedback och felanmälningar

Nedanför finns ett formulär. Fyll i detta när du kommer på någonting du skulle vilja ha till Bölden, eller när någonting i Bölden är i oskick.
