package com.example.musicapp.Service;

public class APIService {
    private static String base_url = "https://billvunguyen.000webhostapp.com/Server/";

    public static DataService getService(){
        return APIRetrofitClient.getClient(base_url).create(DataService.class);
    }

}
