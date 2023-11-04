
{{ include('header.php', {title: 'Erreur'}) }}

<main>
    <div class="error-container"></div>
{% if message %}
    <p class="error-code">{{ message }}</p>
{% else %}
    <p class="error-code">La page que tu cherches n'est pas disponible.</p>
{% endif %}
</main>



{{ include('footer.php') }}

