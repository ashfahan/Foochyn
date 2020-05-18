//
// Store
//

export interface Model {
  userType: "User" | "Admin" | "ResturantOwner" | "Affiliate";
  fullName: string;
  email: string;
  phoneNumber: number;
  dob: Date;
  address: string[];
  image?: string;
  reffrelid?: number;
  verified: boolean;
}

export interface State extends Model {}

const initialState: State = {
  userType: "Affiliate",
  image: "https://api.adorable.io/avatars/285/xyz.png",
  fullName: "Mike Edward",
  email: "mail@mail.com",
  phoneNumber: 12345,
  dob: new Date(Date.now()),
  address: ["South Padre Island", "TX"],
  reffrelid: 0,
  verified: false,
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
