var menutriggers = document.getElementsByClassName("menu-trigger");
Object.keys(menutriggers).forEach(k => (menutriggers[k].onclick = e => e.target.classList.toggle("active")));

var dropdowntrigger = document.getElementsByClassName("dropdown-trigger");
Object.keys(dropdowntrigger).forEach(k => (dropdowntrigger[k].onclick = e => e.target.classList.toggle("active")));

var nosubmit = document.querySelectorAll("[nosubmit]");
Object.keys(nosubmit).forEach(k => (nosubmit[k].onsubmit = e => e.preventDefault()));

$.each($("select.choices"), (index, elem) => {
  new Choices(elem, {
    addItems: true,
    addItemFilter: null,
    removeItems: true,
    removeItemButton: false,
    editItems: false,
    duplicateItemsAllowed: true,
    delimiter: ",",
    paste: true,
    searchEnabled: true,
    searchChoices: true,
    shouldSort: true,
    shouldSortItems: false,
    placeholder: true,
    placeholderValue: null,
    loadingText: "Loading...",
    noResultsText: "No results found",
    noChoicesText: "No choices to choose from",
    itemSelectText: "Press to select",
    addItemText: value => {
      return `Press Enter to add <b>"${value}"</b>`;
    },
    maxItemText: maxItemCount => {
      return `Only ${maxItemCount} values can be added`;
    },
    valueComparer: (value1, value2) => {
      return value1 === value2;
    },
    classNames: {
      containerOuter: "choices input",
      containerInner: "choices__inner",
      input: "choices__input",
      inputCloned: "choices__input--cloned",
      list: "choices__list",
      listItems: "choices__list--multiple",
      listSingle: "choices__list--single",
      listDropdown: "choices__list--dropdown",
      item: "choices__item",
      itemSelectable: "choices__item--selectable",
      itemDisabled: "choices__item--disabled",
      itemChoice: "choices__item--choice",
      placeholder: "choices__placeholder",
      group: "choices__group txt-center",
      groupHeading: "choices__heading",
      button: "choices__button",
      activeState: "is-active",
      focusState: "is-focused",
      openState: "is-open",
      disabledState: "is-disabled",
      highlightedState: "is-highlighted",
      selectedState: "is-selected",
      flippedState: "is-flipped",
      loadingState: "is-loading",
      noResults: "has-no-results",
      noChoices: "has-no-choices"
    }
  });
});

function todigit(number, value = 2) {
  value = value - 1;
  return number < Number.parseInt(1 + "0".repeat(value)) ? "0".repeat(value) + number : number;
}

$("table").DataTable();

$("#login_open").on("click", function() {
  $("#login_popup").removeClass("hidden");
});

$("#login_close").on("click", function() {
  $("#login_popup").addClass("hidden");
});

var now = new Date();

$("input[type=date]").val(now.getFullYear() + "-" + todigit(now.getMonth(), 2) + "-" + todigit(now.getDate(), 2));
$("input[type=time]").val(todigit(now.getHours(), 2) + ":" + todigit(now.getMinutes(), 2));
