<div>
  <input type="text" placeholder="Search" wire:model="search" name="search" />
  <div class="container">@foreach ($gtss as $gts) {{ $gts->referral }} @endforeach</div>

  {{ $gtss->links() }}
</div>
