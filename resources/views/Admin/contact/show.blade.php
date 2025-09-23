@extends('Admin.index')
@section('title', 'Contact Messages')
@section('content')

 <div class="container py-4">
    <div class="card shadow">
        <div class="card-header bg-dark text-white">
            <h4>Chi tiết liên hệ #{{ $contact->id }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Họ tên:</strong> {{ $contact->name }}</p>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Nội dung:</strong></p>
            <div class="border p-3 rounded bg-light">
                {{ $contact->message }}
            </div>
            <p class="mt-3 text-muted">Gửi lúc: {{ $contact->created_at->format('d/m/Y H:i') }}</p>
        </div>
    </div>
    <a href="{{ route('Admin.contacts.index') }}" class="btn btn-primary mt-3"> Quay lại</a>
</div>

@endsection
