<table id="{{$table_id}}" class="table table-hover">
    <thead>
        <tr>
            <th>Link Ending</th>
            <th>Long Link</th>
            <th>Clicks</th>
            <th>Date</th>
            <th>Status code</th>
            <th>Last checked</th>
            @if ($table_id == "admin_links_table")
            {{-- Show action buttons only if admin view --}}
            <th>Creator</th>
            <th>Disable</th>
            <th>Delete</th>
            @endif
        </tr>
    </thead>
</table>
