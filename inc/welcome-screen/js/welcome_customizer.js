( function( api ) {

	// Extends our custom "pro-section" section.
	api.sectionConstructor['maha-recomended-section'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );