<?php
// Home
Breadcrumbs::register('dashboard', function ($breadcrumbs) {
    $breadcrumbs->push('Dashboard', route('admin.home'));
});

Breadcrumbs::register('saldo', function ($breadcrumbs) {
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Saldo', route('admin.balance'));
});

Breadcrumbs::register('recarregar', function ($breadcrumbs) {
    $breadcrumbs->parent('saldo');
    $breadcrumbs->push('Recarregar', route('balance.deposit'));
});

Breadcrumbs::register('retirada', function ($breadcrumbs) {
    $breadcrumbs->parent('saldo');
    $breadcrumbs->push('Retirada', route('balance.withdrawn'));
});

Breadcrumbs::register('tranferir', function ($breadcrumbs) {
    $breadcrumbs->parent('saldo');
    $breadcrumbs->push('Tranferir', route('balance.transfer'));
});

Breadcrumbs::register('tranferir-comfirm', function ($breadcrumbs) {
    $breadcrumbs->parent('tranferir');
    $breadcrumbs->push('Tranferir Comfirmação', route('confirm.transfer'));
});

Breadcrumbs::register('historico', function ($breadcrumbs) {
    $breadcrumbs->parent('saldo');
    $breadcrumbs->push('Historico', route('admin.historic'));
});