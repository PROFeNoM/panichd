<table id="tickets-table" class="table table-condensed table-striped table-hover ddt-responsive" style="width: 100%">
    <thead>
    <tr>
        <td>{{ trans('panichd::lang.table-id') }}</td>

        <td>{{-- hidden: priority order --}}</td>
        <td>{{-- hidden: updated at order --}}</td>
        <td>{{-- hidden: has limit --}}</td>
        <td>{{-- hidden: inverse limit date --}}</td>
        <td>{{-- hidden: inverse start date --}}</td>
        @if ($setting::grab('departments_feature'))
            <td>{{-- hidden: dep_ancestor_name --}}</td>
        @endif

        <td>{{ trans('panichd::lang.table-subject') }}</td>  <!-- Sujet -->
        <td>{{ trans('panichd::lang.table-admin-comments') }}</td>  <!-- Commentaire administrateur -->
        <td>{{ trans('panichd::lang.table-status') }}</td>  <!-- Status -->

        @if ($setting->grab('subject_content_column') == 'no')
            <td>{{ trans('panichd::lang.table-description') }}</td>
        @endif

        @if( $u->currentLevel() > 1 )
            @if (session('panichd_filter_owner')=="")
                <td>{{ trans('panichd::lang.table-owner') }}</td>  <!-- Demandeur -->
                @if ($setting::grab('departments_feature'))
                    <td>{{ trans('panichd::lang.table-department') }}</td>
                @endif
            @endif
            <td>{{ trans('panichd::lang.table-priority') }}</td>  <!-- Priorité -->
        @endif

        @if (session('panichd_filter_agent')=="" && $u->currentLevel() > 1)
            <td>{{ trans('panichd::lang.table-agent') }}</td>  <!-- Superviseur -->
        @endif

        <td>{{ trans('panichd::lang.table-intervention') }}</td>  <!-- Intervention -->

        @if( $u->currentLevel() > 1 )  <!-- Calendrier -->
            @if ($ticketList == 'complete')
                <td>{{ trans('panichd::lang.table-completed_at') }}</td>
            @else
                <td>{{ trans('panichd::lang.table-calendar') }}</td>
            @endif
        @endif

        @if( $u->currentLevel() > 1 )
            @if (session('panichd_filter_category')=="")
                <td>{{ trans('panichd::lang.table-category') }}</td>  <!-- Catégorie -->
            @endif
            <td>{{ trans('panichd::lang.tags') }}</td>
        @endif


        <td>{{ trans('panichd::lang.table-last-updated') }}</td>

    </tr>
    </thead>
</table>