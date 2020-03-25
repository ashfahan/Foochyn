//
// Store
//

const initialState = {
  loaded: false
};

// Actions

export const SetLoaded = value => {
  return {
    type: "SetLoaded",
    data: value
  };
};

// Reducers

export default function(props = initialState, action) {
  switch (action.type) {
    case "SetLoaded":
      return { ...props, loaded: action.data };

    default:
      return props;
  }
}
