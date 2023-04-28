<div>
    {{-- Verify --}}
    <input id="update" type="hidden" wire:model="update">
    <script>
        // wait for document ready
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('update').value = 'true';
        }, false);
    </script>
</div>
