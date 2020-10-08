@include('admin.template.components.form.text', [
    'name' => 'name_surname',
    'label' => 'Ad Soyad',
    'disabled' => true,
])

@include('admin.template.components.form.text', [
    'name' => 'email',
    'type' => 'email',
    'label' => 'E-posta Adresi',
    'disabled' => true,
])

@include('admin.template.components.form.text', [
    'name' => 'subject',
    'label' => 'Konu',
    'disabled' => true,
])

@include('admin.template.components.form.textarea', [
    'name' => 'message',
    'label' => 'Mesaj',
    'disabled' => true,
])