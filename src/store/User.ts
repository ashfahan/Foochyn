//
// Store
//

interface Model {
  userType: "User" | "Admin" | "ResturantOwner";
}

interface State extends Model {}

const initialState: State = {
  userType: "Admin",
};

// Actions

export const SetUserType = (value: string) => {
  return {
    type: "SetUserType",
    data: value,
  };
};

// Reducers

export default function (props = initialState, action: { type: "SetUserType"; data: any }) {
  switch (action.type) {
    case "SetUserType":
      return { ...props, userType: action.data };

    default:
      return props;
  }
}
