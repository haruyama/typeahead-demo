describe('TypeaheadDemo App', function() {
  'use strict';

  beforeEach(function() {
    browser().navigateTo('../../index.html');
  });

  it('should filter state list', function() {
    input('selected').enter('a');
    expect(repeater('.typeahead li').count()).toBe(4);

    input('selected').enter('al');
    expect(repeater('.typeahead li').count()).toBe(2);
  });
});
