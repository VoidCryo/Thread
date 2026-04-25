@php
    $types = ['toast_success' => 'success',
    'toast_error' => 'error',
    'toast_warning' => 'warning',
    'toast_info' => 'info'];
    $toast = null;
    foreach ($types as $key => $type) {
        if (session($key)) {
            $toast = ['message' => session($key), 'type' => $type];
            break;
        }
    }
@endphp

@if ($toast)
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            sp.toast("{{ $toast['message'] }}", {
                type: '{{ $toast['type'] }}',
                @if (session('toast_description'))
                    description: "{{ session('toast_description') }}",
                @endif
                duration: {{ $toast['type'] === 'error' ? 6000 : 5000}},
                position: 'top-center'
            });
        });
    </script>
@endif

