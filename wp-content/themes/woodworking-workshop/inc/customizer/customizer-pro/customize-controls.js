( function( api ) {

	// Extends our custom "woodworking-workshop" section.
	api.sectionConstructor['woodworking-workshop'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );