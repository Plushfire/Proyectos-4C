import React, {useState, useEffect} from "react";
import { Button } from "@mui/material";

export default function StoreButton(props)
{
    const storeButton = () =>
    {

    }
    return(
        <div>
            <Button onClick={storeButton} variant="outlined" color="primary">create</Button>
        </div>
    )
}